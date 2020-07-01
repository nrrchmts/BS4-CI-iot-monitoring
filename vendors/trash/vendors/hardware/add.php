<?php
include('koneksi.php');

$sensor = $_GET['ds18b20'];
$sensor2 = $_GET['hc_sr04'];
$sensor3 = $_GET['mq_135'];
$sensor4 = $_GET['ph_meter'];

$sql = "INSERT INTO sektor (ds18b20, hc_sr04, mq_135, ph_meter) VALUES(:suhu, :volume, :amonia, :ph)";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':suhu', $sensor);
$stmt->bindParam(':volume', $sensor2);
$stmt->bindParam(':amonia', $sensor3);
$stmt->bindParam(':ph', $sensor4);

if ($stmt->execute()) {
    echo "sukses gaes";
} else {
    echo "gagal gaes";
}
