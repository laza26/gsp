<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv1="SELECT * FROM Marketing WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$poziv2="SELECT Naziv, Sadrzaj FROM Marketing WHERE ID=2";
$rezultat2=mysql_query($poziv2);
$poziv3="SELECT Sadrzaj FROM Marketing WHERE ID=3";
$rezultat3=mysql_query($poziv3);
$poziv4="SELECT Sadrzaj FROM Marketing WHERE ID=4";
$rezultat4=mysql_query($poziv4);
$poziv5="SELECT Sadrzaj FROM Marketing WHERE ID=5";
$rezultat5=mysql_query($poziv5);

if(!$rezultat1){
   die('GRESKA U UPITU: ' . mysql_error());
}
	else if(!$rezultat2)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat3)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat4)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat5)
	die('GRESKA U UPITU: ' . mysql_error());


while($ispis1=mysql_fetch_array($rezultat1))
{
	echo "<h1>".$ispis1['Naziv']."</h1>";
	echo "<p>".$ispis1['Sadrzaj']."</p></br>";
}
?>

<a href="galeries/mala_02/bus_reklama.jpg" rel="lightbox[marketing]" title="Рекламе на аутобусу"><img src='galeries/mala_02/bus_reklama_thumb.png' alt="Рекламе на аутобусу" class="crop"></a>

<?php
while($ispis2=mysql_fetch_array($rezultat2))
{
	echo "<h3>".$ispis2['Naziv']."</h3>";
	echo "<p>".$ispis2['Sadrzaj']."</p></br>";
}

while($ispis3=mysql_fetch_array($rezultat3))
{
	echo "<h3>".$ispis3['Sadrzaj']."</h3></br>";
}
?>

<a href="galeries/mala_02/tramvaj_reklama.jpg" rel="lightbox[marketing]" title="Рекламе на трамвају"><img src='galeries/mala_02/tramvaj_reklama_thumb.png' class="crop" alt="Рекламе на трамвају"></a>

<?php
while($ispis4=mysql_fetch_array($rezultat4))
{
	echo "<p>".$ispis4['Sadrzaj']."</p></br>";
}
?>

<a href="documents/cenovnik.pdf" target="_blank">Ценовник</a></br></br>

<?php
while($ispis5=mysql_fetch_array($rezultat5))
{
	echo "<p>".$ispis5['Sadrzaj']."</p></br>";
}
mysql_close($con);
?>