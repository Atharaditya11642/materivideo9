<?php

$konn=mysqli_connect("localhost","root","","service"
//if ($konn)
//{
	//echo "Koneksi Berhasil";
//} else{
	//each "Koneksi Gagal";
//}
$kueri="select * from barang";
$hasil=mysqli_query($konn, $kueri);

$array_temp=array();
$array_hasil=array();

while ($rekord=$hasil->fetch_object())
{
	$array_temp=$rekord;
	array_push($array_hasil,$array_temp);
	
}
json_encode($array_hasil);
?>