Soal nomor 1 :
<br>
<?php 
$jam_kerja = "10"; 
if($jam_kerja > 8) {
    $maka = "mendapat gaji lembur";
}else if ($jam_kerja == 8) {
    $maka = "tidak mendapat gaji lembur";
}

echo ("jika karyawan bekerja ".$jam_kerja."jam maka akan ".$maka);
?>

<br><br>
Soal nomor 2 : 
<br>
<?php
$kelas_nasabah = "Kelas1";
if ($kelas_nasabah == "Vip") {
    $maka = "Kartu ATM, Buku tabungan, Akses M-Banking,dan Menjadi Prioritas";
}else if ($kelas_nasabah == "Kelas1") {
    $maka = "Kartu ATM, Buku tabungan,dan Akses M-Banking";
}else if ($kelas_nasabah == "Kelas2") {
    $maka = "Kartu ATM dan Buku tabungan";
}

echo ("jika kelas Nasabah ".$kelas_nasabah." akan mendapat ".$maka)
?>

<br><br>
Soal nomor 3 : 
<br>
<?php
for($a=21; $a<31; $a+=1)
echo "$a <br>";
?>

<br><br>
Soal nomor 4 : 
<br>
<?php
for($b=3; $b<61; $b+=3)
echo "$b <br>";
?>

<br><br>
Soal nomor 5 : 
<br>
<?php
$nama_perusahaan = array("Toyota", "Daihatsu", "Honda", "Ford", "Ferary");
echo $nama_perusahaan[4];
echo "<br>";
echo $nama_perusahaan[1] . " dan " . $nama_perusahaan[2];
echo "<br>";
?>
