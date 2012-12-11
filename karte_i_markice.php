<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv1="SELECT Naziv, Sadrzaj FROM Karte_i_markice WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$poziv2="SELECT Naziv, Sadrzaj FROM Karte_i_markice WHERE ID=2";
$rezultat2=mysql_query($poziv2);
$poziv3="SELECT Naziv, Sadrzaj FROM Karte_i_markice WHERE ID=3";
$rezultat3=mysql_query($poziv3);
$poziv4="SELECT Naziv, Sadrzaj FROM Karte_i_markice WHERE ID=4";
$rezultat4=mysql_query($poziv4);

if(!$rezultat1){
   die('GRESKA U UPITU: ' . mysql_error());
   exit;
}
if(!$rezultat2){
   die('GRESKA U UPITU: ' . mysql_error());
   exit;
}
if(!$rezultat3){
   die('GRESKA U UPITU: ' . mysql_error());
   exit;
}
if(!$rezultat4){
   die('GRESKA U UPITU: ' . mysql_error());
   exit;
}

while($ispis1=mysql_fetch_array($rezultat1))
{
	echo "<h2>".$ispis1['Naziv']."</h2>";
	echo "<p>".$ispis1['Sadrzaj']."</p></br></br>";
}

while ($ispis2=mysql_fetch_array($rezultat2))
{
	echo "<h2>".$ispis2['Naziv']."</h2>";
	echo"<p>".$ispis2['Sadrzaj']."</p></br></br>";
}

while($ispis3=mysql_fetch_array($rezultat3))
{
	echo "<h2>".$ispis3['Naziv']."</h2>";
	echo "<p>".$ispis3['Sadrzaj']."</p></br></br>";
}

while($ispis4=mysql_fetch_array($rezultat4))
{
	echo "<h2>".$ispis4['Naziv']."</h2>";
	echo "<p>".$ispis4['Sadrzaj']."</p></br>";
}
mysql_close($con);
?>