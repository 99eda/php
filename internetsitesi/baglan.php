<?php

$serveradi="localhost";
$kullaniciadi="root";
$sifre="123456789";
$sayfadi="kutuphane";

$baglan=new mysqli($serveradi,$kullaniciadi,$sifre,$sayfadi);

if($baglan->connect_error)
{
	die("baglantı hatası:".$baglan->connect_error);
}
echo "bağlantı başarılı";

?>