<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Adı</th>
    <th>Soyad</th>
    <th>Email</th>
    <th> konu başlığı</th>
    <th> konu</th>
  </tr>
  <?php
  session_start();
 if($_SESSION["user"]==NULL)
 {
	 echo "<script>window.location.href='cikis.php'</script>";
	 
	 }	
else{
	
	
	include("baglan.php");

$sec="select * from iletisim";

$sonuc=$baglan-> query($sec);

if($sonuc->num_rows>0)
{
	
	while($cek=$sonuc->fetch_assoc())
	{
		echo "Merhaba1";
		echo "
		<tr>
<td>".$cek['ad']."</td>		
<td>".$cek['soyad']."</td>
<td>".$cek['email']."</td>
<td>".$cek['baslik']."</td>
<td>".$cek['mesaj']."</td>
</tr>

";
	}	
}

else
{
	echo "veri tabanında kayıtlı hiç bir veri bulunamadı.";
	
}

}


	 
  

?>

</table>

</body>
</html>










 

  
    


