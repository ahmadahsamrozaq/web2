<!DOCTYPE>
<html>
<head>
	<title>Get Date</title>
</head>
<body>
<center>
<h1>
<?php
$sekarang = getdate(); 
$bulan = $sekarang['month'];
$hari = $sekarang ['mday'];
$tahun = $sekarang ['year'];
$jam = $sekarang['hours'];
if ($jam <= 11) {
 echo "Selamat Pagi";
} elseif ($jam > 07 and $jam <= 10) {
 echo "Selamat Siang";
} elseif ($jam > 11 and $jam <= 15) {
 echo "Selamat Sore";
} elseif ($jam > 15) {
 echo "Selamat Malam";
}
?>
</h1>
<h2> Selamat datang</h2>
<h3> Sekarang adalah tanggal <?php echo "$hari $bulan $tahun"; ?></h3>
</body>
</html>