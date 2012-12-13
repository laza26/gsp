<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);

$poziv1="SELECT Broj_linije, Trasa FROM Tramvajske_linije WHERE Broj_linije=2 AND Smer='A'";
$rezultat1=mysql_query($poziv1);
$ispis1=mysql_fetch_array($rezultat1);
$poziv2="SELECT Broj_linije, Trasa FROM Tramvajske_linije WHERE Broj_linije=3 AND Smer='А'";
$rezultat2=mysql_query($poziv2);
$ispis2=mysql_fetch_array($rezultat2);
$poziv3="SELECT Broj_linije, Trasa FROM Tramvajske_linije WHERE Broj_linije=5 AND Smer='А'";
$rezultat3=mysql_query($poziv3);
$ispis3=mysql_fetch_array($rezultat3);
$poziv4="SELECT Broj_linije, Trasa FROM Tramvajske_linije WHERE Broj_linije=6 AND Smer='А'";
$rezultat4=mysql_query($poziv4);
$ispis4=mysql_fetch_array($rezultat4);
$poziv5="SELECT Broj_linije, Trasa FROM Tramvajske_linije WHERE Broj_linije=7 AND Smer='А'";
$rezultat5=mysql_query($poziv5);
$ispis5=mysql_fetch_array($rezultat5);

$poziv6="SELECT Broj_linije, Trasa FROM Trolejbuske_linije WHERE Broj_linije='19' AND Smer='А'";
$rezultat6=mysql_query($poziv6);
$ispis6=mysql_fetch_array($rezultat6);
$poziv7="SELECT Broj_linije, Trasa FROM Trolejbuske_linije WHERE Broj_linije=21 AND Smer='А'";
$rezultat7=mysql_query($poziv7);
$ispis7=mysql_fetch_array($rezultat7);
$poziv8="SELECT Broj_linije, Trasa FROM Trolejbuske_linije WHERE Broj_linije=22 AND Smer='А'";
$rezultat8=mysql_query($poziv8);
$ispis8=mysql_fetch_array($rezultat8);
$poziv9="SELECT Broj_linije, Trasa FROM Trolejbuske_linije WHERE Broj_linije=28 AND Smer='А'";
$rezultat9=mysql_query($poziv9);
$ispis9=mysql_fetch_array($rezultat9);
$poziv10="SELECT Broj_linije, Trasa FROM Trolejbuske_linije WHERE Broj_linije=29 AND Smer='А'";
$rezultat10=mysql_query($poziv10);
$ispis10=mysql_fetch_array($rezultat10);

$poziv11="SELECT Broj_linije, Trasa FROM Autobuske_linije WHERE Broj_linije=15 AND Smer='А'";
$rezultat11=mysql_query($poziv11);
$ispis11=mysql_fetch_array($rezultat11);
$poziv12="SELECT Broj_linije, Trasa FROM Autobuske_linije WHERE Broj_linije=16 AND Smer='А'";
$rezultat12=mysql_query($poziv12);
$ispis12=mysql_fetch_array($rezultat12);
$poziv13="SELECT Broj_linije, Trasa FROM Autobuske_linije WHERE Broj_linije=17 AND Smer='А'";
$rezultat13=mysql_query($poziv13);
$ispis13=mysql_fetch_array($rezultat13);
$poziv14="SELECT Broj_linije, Trasa FROM Autobuske_linije WHERE Broj_linije=18 AND Smer='А'";
$rezultat14=mysql_query($poziv14);
$ispis14=mysql_fetch_array($rezultat14);
$poziv15="SELECT Broj_linije, Trasa FROM Autobuske_linije WHERE Broj_linije=20 AND Smer='А'";
$rezultat15=mysql_query($poziv15);
$ispis15=mysql_fetch_array($rezultat15);

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
	else if(!$rezultat7)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat8)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat9)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat10)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat11)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat12)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat13)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat14)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat15)
	die('GRESKA U UPITU: ' . mysql_error());

	echo "<h1>Списак дневних линија</h1>";
	echo "<h2>Трамвајске линије</h2>";
	
mysql_close($con);	
?>

<!-- Tabela tramvaji-->
<dl class="tramvaji"> 
	<dt class="zaglavlje1">Број линије</dt>
	<dd class="zaglavlje1">Траса</dd>
	<dt><a href="?strana=linija2"><?php echo $ispis1['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija2"><?php echo $ispis1['Trasa'];?></a></dd>
	<dt><a href="?strana=linija3"><?php echo $ispis2['Broj_linije'];?></dt>
	<dd><a href="?strana=linija3"><?php echo $ispis2['Trasa'];?></a></dd>
	<dt><a href="?strana=linija5"><?php echo $ispis3['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija5"><?php echo $ispis3['Trasa'];?></a></dd>
	<dt><a href="?strana=linija6"><?php echo $ispis4['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija6"><?php echo $ispis4['Trasa'];?></a></dd>
	<dt><a href="?strana=linija7"><?php echo $ispis5['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija7"><?php echo $ispis5['Trasa'];?></a></dd>
</dl>
    <!-- Kraj tabele tramvaji -->

<h2>Тролејбуске линије</h2>

<!-- Tabela trolejbusi-->
<dl class="trolejbusi">
	<dt class="zaglavlje2">Број линије</dt>
	<dd class="zaglavlje2">Траса</dd>
	<dt><a href="?strana=linija19"><?php echo $ispis6['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija19"><?php echo $ispis6['Trasa'];?></a></dd>
	<dt><a href="?strana=linija21"><?php echo $ispis7['Broj_linije'];?></dt>
	<dd><a href="?strana=linija21"><?php echo $ispis7['Trasa'];?></a></dd>
	<dt><a href="?strana=linija22"><?php echo $ispis8['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija22"><?php echo $ispis8['Trasa'];?></a></dd>
	<dt><a href="?strana=linija28"><?php echo $ispis9['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija28"><?php echo $ispis9['Trasa'];?></b></dd>
	<dt><a href="?strana=linija29"><?php echo $ispis10['Broj_linije'];?></a></dt>
	<dd><a href="?strana=linija29"><?php echo $ispis10['Trasa'];?></a></dd>
</dl>
<!-- Kraj tabele trolejbusi -->

<h2>Аутобуске линије</h2>
<!-- Tabela autobusi-->
<dl class="autobusi">
	<dt class="zaglavlje3">Број линије</dt>
	<dd class="zaglavlje3">Траса</dd>
	<dt><a href="15.php"><?php echo $ispis11['Broj_linije'];?></a></dt>
	<dd><a href="15.php"><?php echo $ispis11['Trasa'];?></a></dd>
	<dt><a href="16.php"><?php echo $ispis12['Broj_linije'];?></a></dt>
	<dd><a href="16.php"><?php echo $ispis12['Trasa'];?></a></dd>
	<dt><a href="17.php"><?php echo $ispis13['Broj_linije'];?></a></dt>
	<dd><a href="17.php"><?php echo $ispis13['Trasa'];?></a></dd>
	<dt><a href="18.php"><?php echo $ispis14['Broj_linije'];?></a></dt>
	<dd><a href="18.php"><?php echo $ispis14['Trasa'];?></a></dd>
	<dt><a href="20.php"><?php echo $ispis15['Broj_linije'];?></a></dt>
	<dd><a href="20.php"><?php echo $ispis15['Trasa'];?></a></dd>
</dl>
<!-- Kraj tabele autobusi -->