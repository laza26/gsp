<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv1="SELECT Naziv, Sadrzaj FROM Naslovna WHERE ID=1";
$rezulat1=mysql_query($poziv1);
$poziv2="SELECT Naziv, Sadrzaj FROM Naslovna WHERE ID=2";
$rezulat2=mysql_query($poziv2);

if(!$rezulat1){
   die('GRESKA U UPITU: ' . mysql_error());
   exit;
}
if(!$rezulat2){
   die('GRESKA U UPITU: ' . mysql_error());
   exit;
}

while($ispis1=mysql_fetch_array($rezulat1))
{
	echo "<h3>".$ispis1['Sadrzaj']."</h3></br></br>";
}

while ($ispis2=mysql_fetch_array($rezulat2))
{
	echo"<h4>".$ispis2['Sadrzaj']."</h4><br><br>";
}

mysql_close($con);
?>
