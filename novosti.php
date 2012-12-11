<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv1="SELECT * FROM Novosti WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$poziv2="SELECT * FROM Novosti WHERE ID=2";
$rezultat2=mysql_query($poziv2);
$poziv3="SELECT * FROM Novosti WHERE ID=3";
$rezultat3=mysql_query($poziv3);

if(!$rezultat1){
   die('GRESKA U UPITU: ' . mysql_error());
}
	else if(!$rezultat2)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat3)
	die('GRESKA U UPITU: ' . mysql_error());


while($ispis1=mysql_fetch_array($rezultat1))
{
	echo "<h2>".$ispis1['Naziv']."</h2>";
	echo "<h3>".$ispis1['Podnaslov']."</h3>";
?>
<a href='galeries/mala_01/bus_01.jpg' rel='lightbox[mala1]' title='Нови аутобуси'><img src='galeries/mala_01/bus_01_thumb.png' alt="Аутобуси" class="crop"></a>

<?php
	echo "<p>".$ispis1['Sadrzaj']."</p></br></br></br>";
}

while($ispis2=mysql_fetch_array($rezultat2))
{
	echo "<h2>".$ispis2['Naziv']."</h2>";
	echo "<h3>".$ispis2['Podnaslov']."</h3>";
	echo "<p>".$ispis2['Sadrzaj']."</p></br>";
}

while($ispis3=mysql_fetch_array($rezultat3))
{
	echo "<h2>".$ispis3['Naziv']."</h2>";
	echo "<h3>".$ispis3['Podnaslov']."</h3>";
?>

<a href="galeries/mala_01/tramvaj.jpg" rel="lightbox[mala2]" title="Трамвај 'Шпанац'"><img src='galeries/mala_01/tramvaj_thumb.png' alt="Шпанац" class="crop"></a>
    
<?php
	echo "<p>".$ispis3['Sadrzaj']."</p>";
}
mysql_close($con);
?>

<a href="galeries/mala_01/bus_02.jpg" rel="lightbox[mala2]" title="КПГ Аутобус"><img src='galeries/mala_01/bus_02_thumb.png' alt="Бус БИК" class="alignCenter crop"></a>
<a href="galeries/mala_01/trola.jpg" rel="lightbox[mala2]" title="Тролејбус 'Белкомунаш'"><img src='galeries/mala_01/trola_thumb.png' alt="Тролејбус" class="alignCenter crop"></a>
