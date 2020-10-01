# BS4-CI-iot-monitoring

Sementara Aplikasi ini hanya berisikan trial &amp; error

- [Update List](https://github.com/nrchmts/BS$-CI-iot-monitoring/README#TODO-List)
- [Update List](https://github.com/nrchmts/BS$-CI-iot-monitoring/README#Referensi)

## TODO List

- tabs dan dropdown pada graph

  - perhari
  - perminggu
  - perbulan
  - pertahun

    .apabila perhari, tampilkan 3 data terbaru pada grafik
    .apabila perminggu, tampilkan 4 data 1 data pertama dan lompat 4 data setelahnya
    .apabila perbulan blblabla

- buat page settings untuk menyesuaikan nilai minimum nilai minimum
  - ini diperlukan untuk pengembangan ke depannya agar dapat digunakan pada hewan lain
- nantikan lagi

## Sensor
# MQ-135
```
const int gasSensor =0;
void setup(){
  Serial.begin(9600);      // sets the serial port to 9600
}
void loop(){
  float voltage;
  voltage = getVoltage(gasSensor);
  
  Serial.println(voltage);
  delay(1000);
}
 
float getVoltage(int pin){
  return (analogRead(pin) * 0.004882814);
  // This equation converts the 0 to 1023 value that analogRead()
  // returns, into a 0.0 to 5.0 value that is the true voltage
  // being read at that pin.
}
```

## Referensi

- Bootstrap 4.1
- SBAdmin2
- Font Awesome
- dan lainnya
  Untuk semuanya yang tidak disebutkan saya ucapkan terima kasih
