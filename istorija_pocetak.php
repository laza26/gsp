<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv1="SELECT Naziv, Sadrzaj FROM Istorija WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$poziv2="SELECT Sadrzaj FROM Istorija WHERE ID=2";
$rezultat2=mysql_query($poziv2);
$poziv3="SELECT Sadrzaj FROM Istorija WHERE ID=3";
$rezultat3=mysql_query($poziv3);

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

while($ispis1=mysql_fetch_array($rezultat1))
{
	echo "<h1>".$ispis1['Naziv']."</h1></br>";
?>
<a href="galeries/istorija/praistorija_01.jpg" rel="lightbox[praistorija]" title="Првобитни аутобуси"><img src='galeries/istorija/praistorija_01_thumb.png' alt="Првобитни аутобуси" class="crop"></a>
<?php
	echo "<p>".$ispis1['Sadrzaj']."</p></br></br>";
}
?>

<a href="galeries/istorija/praistorija_02.jpg" rel="lightbox[praistorija]" title="Првобитни аутобуси"><img src='galeries/istorija/praistorija_02_thumb.png' alt="Првобитни аутобуси" class="alignRight crop"></a>

<?php
while ($ispis2=mysql_fetch_array($rezultat2))
{
	echo"<p>".$ispis2['Sadrzaj']."</p></br>";
}

while($ispis3=mysql_fetch_array($rezultat3))
{
	echo "<p>".$ispis3['Sadrzaj']."</p></br>";
}
mysql_close($con);
?> 

