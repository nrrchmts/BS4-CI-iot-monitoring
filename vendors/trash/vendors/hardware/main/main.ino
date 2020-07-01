#include <ESP8266WiFi.h>
#include <Wire.h>
#include <OneWire.h>
#include <DallasTemperature.h>
#include <MQ135.h>

//Sensor pin Declare#######################################
//DS18B20
int sensorPinDS18b20 = 4; //GPO4 atau D2
float suhuC;
OneWire ourWire(sensorPinDS18b20);
DallasTemperature sensors(&ourWire);

//HC-SR04
#define echoPin 12 //Echo Pin
#define trigPin 14 //Trigger Pin
int maximumRange = 200;   //kebutuhan akan maksimal range
int minimumRange = 00;    //kebutuhan akan minimal range
long duration, distance;  //waktu untuk kalkulasi jarak

//MQ-135
const int gasSensor =0; 
//########################################################

//Connection Required#####################################
const char *ssid = "ig: saptomuch";        //wifi name
const char *password = "skuylivingbrow";   //wifi password
const char *host = "185.237.145.69";       //IP shared
//########################################################

void setup() {
  Serial.begin(115200); //Serial Monitor

  //Wi-Fi identify########################################
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);

  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
  // ./Wi-Fi identify####################################

  // HC-SR04
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
}

void loop() {
  Serial.println("===========================");
  
  //DS18B20
  sensors.requestTemperatures();
  suhuC = sensors.getTempCByIndex(0);

  //MQ-135
  float voltage;
  voltage = getVoltage(gasSensor);

  //HC-SR04
  digitalWrite(trigPin, LOW);delayMicroseconds(2);
  digitalWrite(trigPin, HIGH);delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  duration = pulseIn(echoPin, HIGH);

  //perhitungan untuk dijadikan jarak
  distance = duration/58.2;

  //OUTPUT SENSOR############################################
  //OUTPUT MONITOR
  Serial.println("Output :");
  //Output DS18b20
  Serial.print("DS18B20 = ");
  Serial.print(suhuC);
  Serial.print(" ");
  Serial.println("C");

  //Output MQ-135
  Serial.print("MQ-135 = ");
  Serial.print(voltage);
  Serial.println(" PPM");
  // ./#####################################################

  //Output HC-SR04
  if (distance >= maximumRange || distance <= minimumRange)
  {
    Serial.print("HC-SR04 = ");
    Serial.println("-1");
  }
  else {
    Serial.print("HC-SR04 = ");
    Serial.println(distance);
  }

  Serial.println("");

  Serial.print("connecting to ");
  Serial.println(host);

  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort))
  {
    Serial.println("connection failed");
    return;
  }

  //URL for add data#######################################
  String url = "/vendor/hardware/add.php?";
  url += "ds18b20=";
  url += suhuC;
  if (distance >= maximumRange || distance <= minimumRange)
  {
    url += "&hc_sr04=";
    url += 0;
  } else {
    url += "&hc_sr04=";
    url += distance;
  }
  url += "&mq_135=";
  url += voltage;

  url += "&ph_meter=";
  url += 1; //false coz sensor doesn't exist
  // ./ URL for add data##################################
  
  Serial.print("Requesting URL: ");
  Serial.println(url);
  
  // This will send the request to the server
  client.print(String("GET ") + url + " HTTP/1.1\r\n" +
              "Host: " + host + "\r\n" +
              "Connection: close\r\n\r\n");

  unsigned long timeout = millis();
  while (client.available() == 0)
  {
    if (millis() - timeout > 5000)
    {
      Serial.println(">>> Client Timeout !");
      client.stop();
      return;
    }
  }

  // Read all the lines of the reply from server and print them to Serial
  while (client.available())
  {
    String line = client.readStringUntil('\r');
    //Serial.print(line);

    if (line.indexOf("data true") != -1)
    {
      Serial.println();
      Serial.println("Yes, data masuk");
    }
    else if (line.indexOf("data false") != -1)
    {
      Serial.println();
      Serial.println("Maaf, data gagal masuk");
      //digitalWrite(alarmPin, HIGH);
    }
  }

  Serial.println("closing connection");
  Serial.println("===========================");
  Serial.println("");
  delay(1000);
}

float getVoltage(int pin){
  return (analogRead(pin) * 0.004882814);
  // This equation converts the 0 to 1023 value that analogRead()
  // returns, into a 0.0 to 5.0 value that is the true voltage
  // being read at that pin.
}
