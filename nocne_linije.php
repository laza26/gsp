<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);

$poziv1="SELECT Broj_linije, Trasa FROM Nocne_linije WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$ispis1=mysql_fetch_array($rezultat1);
$poziv2="SELECT Broj_linije, Trasa FROM Nocne_linije WHERE ID=2";
$rezultat2=mysql_query($poziv2);
$ispis2=mysql_fetch_array($rezultat2);
$poziv3="SELECT Broj_linije, Trasa FROM Nocne_linije WHERE ID=3";
$rezultat3=mysql_query($poziv3);
$ispis3=mysql_fetch_array($rezultat3);
$poziv4="SELECT Broj_linije, Trasa FROM Nocne_linije WHERE ID=4";
$rezultat4=mysql_query($poziv4);
$ispis4=mysql_fetch_array($rezultat4);
$poziv5="SELECT Broj_linije, Trasa FROM Nocne_linije WHERE ID=6";
$rezultat5=mysql_query($poziv5);
$ispis5=mysql_fetch_array($rezultat5);

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
 		
mysql_close($con);	
?>
<h1>Списак ноћних линија</h1>

<dl class="autobusiN">
	<dt class="zaglavlje4">Број линије</dt>
	<dd class="zaglavlje4">Траса</dd>
	<dt><a href="?strana=linija7N"><?php echo $ispis1['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija7N"><?php echo $ispis1['Trasa'];?></a></dd>
	<dt><a href="?strana=linija15N"><?php echo $ispis2['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija15N"><?php echo $ispis2['Trasa'];?></a></dd>
	<dt><a href="?strana=linija26N"><?php echo $ispis3['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija26N"><?php echo $ispis3['Trasa'];?></a></dd>
	<dt><a href="?strana=linija27N"><?php echo $ispis4['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija27N"><?php echo $ispis4['Trasa'];?></a></dd>
	<dt><a href="?strana=linija32N"><?php echo $ispis5['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija32N"><?php echo $ispis5['Trasa'];?></a></dd>
</dl>