<div id="leftcolumn">
<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv1="SELECT * FROM Kontakt WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$poziv2="SELECT * FROM Kontakt WHERE ID=2";
$rezultat2=mysql_query($poziv2);
$poziv3="SELECT * FROM Kontakt WHERE ID=3";
$rezultat3=mysql_query($poziv3);
$poziv4="SELECT * FROM Kontakt WHERE ID=4";
$rezultat4=mysql_query($poziv4);
$poziv5="SELECT * FROM Kontakt WHERE ID=5";
$rezultat5=mysql_query($poziv5);
$poziv6="SELECT * FROM Kontakt WHERE ID=6";
$rezultat6=mysql_query($poziv6);


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
	else if(!$rezultat6)
	die('GRESKA U UPITU: ' . mysql_error());
	
	
while($ispis1=mysql_fetch_array($rezultat1))
{
	echo "<h2>".$ispis1['Naziv']."</h2></br>";
	echo "<p>".$ispis1['Sadrzaj']."</p></br>";
}

echo "<h3>Диспечерски центар ради нон стоп, од 00:24 сваког дана</h3></br></br>";
echo "<h3>Контакт телефони:</h3><br>";

while($ispis2=mysql_fetch_array($rezultat2))
{
    echo "<b>".$ispis2['Naziv']."</b> ".$ispis2['Sadrzaj']."</br></br>";
}

while($ispis3=mysql_fetch_array($rezultat3))
{
    echo "<b>".$ispis3['Naziv']."</b> ".$ispis3['Sadrzaj']."</br></br>";
}

while($ispis4=mysql_fetch_array($rezultat4))
{
    echo "<b>".$ispis4['Naziv']."</b> ".$ispis4['Sadrzaj']."</br></br>";
}

while($ispis5=mysql_fetch_array($rezultat5))
{
    echo "<b>".$ispis5['Naziv']."</b> ".$ispis5['Sadrzaj']."</br></br>";
}

while($ispis6=mysql_fetch_array($rezultat6))
{
    echo "<b>".$ispis6['Naziv']."</b> ".$ispis6['Sadrzaj']."</br></br>";
}
mysql_close($con);
?>
</div>

<div id="rightcolumn">
<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv11="SELECT * FROM Pisite_nam WHERE ID=1";
$rezultat11=mysql_query($poziv11);

while($ispis11=mysql_fetch_array($rezultat11))
{
    echo "<center><h2>".$ispis11['Naziv']."</h2></center></br>";
    echo $ispis11['Sadrzaj']."</br></br></br>";
}

mysql_close($con);
?>

<!-- Kontakt tabela -->
	<table><form id="forma" action="kontakt.php?p=10" method="post" onSubmit="return provera()">
	<tr>
		<td>Ваше име:</td>
		<td><input type="text" id="ime" name="ime"></td>
	</tr>
	<tr>
		<td>E-mail:</td>
		<td><input type="text" id="mail" name="mail"></td>		
	</tr>
	<tr>
		<td>Ваша порука:</td>
		<td><textarea id="ime" name="ime" cols="20" rows="3"></textarea></td>
	</tr>
	<tr>
		<td><input type="reset" value="Обриши"/></td>
		<td><input type="submit" name="submit" value="Пошаљи"/></td>
	</tr>
	</form></table>
<!-- Kraj kontakt tabele -->

<?php
error_reporting (E_ALL ^ E_NOTICE);
if($_REQUEST['p']=='10'){
	$ime=$_POST['ime'];
	$adresa=$_POST['mail'];
	$poruka=$_POST['poruka'];
	
	$adresa_primaoca='laza26@gmail.com';
	$subject='GSP Poruka sa sajta';
	$sadrzaj='Posiljalac: '.$ime. "\n". 'E mail posiljaoca: '.$adresa. "\n". 'Poruka: '.$poruka."/n";
	$dolaznisajt='From:gspbeograd.commuv.com';
	
	mail($adresaprimaoca, $subject, $sadrzaj, $dolaznisajt);
}
?>
</div>    