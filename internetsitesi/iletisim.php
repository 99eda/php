<?php
include("baglan.php");

echo $_POST["isim"].$_POST["soyad"].$_POST["mail"].
	$_POST["konu"] .$_POST["mesaj"];

//if(isset($_POST["isim"],$_POST["soyad"],$_POST["mail"],
	//$_POST["konu"] ,$_POST["mesaj"]))
//{
	$ad=$_POST["isim"];
	$soyad=$_POST["soyad"];
	$mail=$_POST["mail"];
	$konu=$_POST["konu"];
	$mesaj=$_POST["mesaj"];


	
$ekle="INSERT INTO iletisim( ad, soyad, email, baslik, mesaj) VALUES 
('".$ad."','".$soyad."','".$mail."','".$konu."','".$mesaj."')";


echo $ekle;

if($baglan->query($ekle)===TRUE)
{
	echo "<script>alert('mesajınız başarı ile gönderildi.') </script>";
}
else {
	echo $baglan->error;
	
	

	//echo "<script>alert('mesajınız gönderilirken hata oluştu.')
	//</script>";
//}

}


?>
