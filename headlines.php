<?php

$poziv11="SELECT Naziv, Sadrzaj FROM promena_rezima WHERE ID=1";
$rezultat11=mysql_query($poziv11);
$ispis11=mysql_fetch_array($rezultat11);
$poziv12="SELECT Naziv, Sadrzaj FROM promena_rezima WHERE ID=2";
$rezultat12=mysql_query($poziv12);
$ispis12=mysql_fetch_array($rezultat12);
$poziv13="SELECT Naziv, Sadrzaj FROM promena_rezima WHERE ID=3";
$rezultat13=mysql_query($poziv13);
$ispis13=mysql_fetch_array($rezultat13);
$poziv14="SELECT Naziv, Sadrzaj FROM promena_rezima WHERE ID=4";
$rezultat14=mysql_query($poziv14);
$ispis14=mysql_fetch_array($rezultat14);

if(!$rezultat11){
   die('GRESKA U UPITU: ' . mysql_error());
}
	else if(!$rezultat12)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat13)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat14)
	die('GRESKA U UPITU: ' . mysql_error());	
	
mysql_close($con);
?>
<h2>Измене у режиму саобраћаја линија ГСП</h2>
<a href="?naslov=1"> <?php echo "<h4>".$ispis11['Naziv']."</h4>";?> </a> </br>
<a href="?naslov=2"> <?php echo "<h4>".$ispis12['Naziv']."</h4>";?> </a> </br>
<a href="?naslov=3"> <?php echo "<h4>".$ispis13['Naziv']."</h4>";?> </a> </br>
<a href="?naslov=4"> <?php echo "<h4>".$ispis14['Naziv']."</h4>";?> </a> </br>

