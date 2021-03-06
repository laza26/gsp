﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ГСП Београд | Организација предузећа</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styles_2cl.css" />
<link rel="shortcut icon" href="images/icon.png">

	<!-- Slider -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<!-- End of Slider -->
	
	<!-- Glavni meni -->
		<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="css/dropdown/themes/default/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
	<!-- / END -->
	
	<script src="js/menus.js" type="text/javascript"></script>

	<style type="text/css">
	<!--
	body { background-image: url(images/background/blue.png);
		background-repeat: repeat-x;
		}
	-->
	</style>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
  <!-- Begin Header -->
  <div id="header">
  	  	<!-- Begin Slider -->
	<div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">
			<a href="index.php"><img src="images/header/slider_bus.jpg" alt="" /></a>
			<a href="index.php"><img src="images/header/slider_trola.jpg" alt="" /></a>
			<a href="index.php"><img src="images/header/slider_tramvaj.jpg" alt="" /></a>
		</div>
	</div>
	<div id="htmlcaption" class="nivo-html-caption">
		<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
	</div>
	
	<script type="text/javascript">
		$(window).load(function() {
		$('#slider').nivoSlider();
		});
	</script>
	<!-- End Slider-->
  </div>
  <!-- End Header -->
  
  <!-- pomocni -->
  <div id="pomocni">
  </div>
  <!-- end pomocni-->
  
  <!-- Begin Navigation -->
  <div id="navigation">
  	<ul id="nav" class="dropdown dropdown-horizontal">
		<li><a href="index.php">Почетна</a></li>
		<li class="dir">О ГСП-у
			<ul>				
				<li class="dir">Историја
					<ul>
						<li><a href="istorija_pocetak.php">Почетак</a></li>
						<li><a href="istorija_rat.php">Између два рата</a></li>
						<li><a href="istorija_ostatak.php">Од 1940. до данас</a></li>
					</ul>
				</li>
				<li><a href="delatnost.php">Делатност предузећа</a></li>
				<li><a href="organizacija.php">Организација предузећа</a></li>
				<li><a href="poslovna_politika.php">Пословна политика</a></li>
				<li><a href="vozni_park.php">Возни парк</a></li>
			</ul>
		</li>
		<li class="dir">Линије
			<ul>
				<li><a href="dnevne_linije.php">Дневне линије</a></li>
				<li><a href="nocne_linije.php">Ноћне линије</a></li>
				<li><a href="skolske_linije.php">Школске линије</a></li>
			</ul>
		</li>
		<li><a href="galerija.php">Галерија</a></li>
		<li class="dir">Карте
			<ul>
				<li><a href="karte_i_markice.php">Карте и маркице</a></li>
				<li><a href="cene.php">Цене</a></li>	
			</ul>
		</li>
		<li class="dir">Информације
			<ul>
				<li><a href="promena_rezima.php">Промена режима</a></li>
				<li><a href="novosti.php">Новости</a></li>
			</ul>
		</li>
		<li class="dir">Остале услуге
			<ul>
				<li><a href="marketing.php">Маркетинг</a></li>
				<li><a href="tehnicki_pregled.php">Технички преглед</a></li>
				<li><a href="ostale_usluge.php">Остале услуге</a></li>
			</ul>
		</li>
		<li class="dir">Контакт
			<ul>
				<li><a href="informacije.php">Информације о саобраћају</a></li>
				<li><a href="pisite_nam.php">Пишите нам</a></li>
			</ul>
		</li>
	</ul>
  </div>
  <!-- End Navigation -->
  
  <!-- Begin Left Column -->
  <div id="leftcolumn"> <h2>Пречице:</h2><br>
  <center><table id="levi_meni">
	<tr><td><a href="dnevne_linije.php"><img src="images/buttons/mali_meni/dl2.png" name="dl" alt="Дневне линије" onMouseover="document.dl.src=dl_over.src;" onClick="document.dl.src=dl_default.src;" onMouseout="document.dl.src=dl_default.src;" style="border:0;"></a></td></tr>
	<tr><td><a href="nocne_linije.php"><img src="images/buttons/mali_meni/nl2.png" name="nl" alt="Ноћне линије" onMouseover="document.nl.src=nl_over.src;" onClick="document.nl.src=nl_default.src;" onMouseout="document.nl.src=nl_default.src;" style="border:0;"></a></td></tr>
	<tr><td><a href="karte_i_markice.php"><img src="images/buttons/mali_meni/kim2.png" name="kim" alt="Карте и маркице" onMouseover="document.kim.src=kim_over.src;" onClick="document.kim.src=kim_default.src;" onMouseout="document.kim.src=kim_default.src;" style="border:0;"></a></td></tr>
	<tr><td><a href="promena_rezima.php"><img src="images/buttons/mali_meni/ir2.png" name="ir" alt="Измене режима" onMouseover="document.ir.src=ir_over.src;" onClick="document.ir.src=ir_default.src;" onMouseout="document.ir.src=ir_default.src;" style="border:0;"></a></td></tr>
  </table></center>
  </div>
  <!-- End Left Column -->
  
  <!-- Begin Right Column -->
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
$poziv1="SELECT * FROM Organizacija_1 WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$poziv2="SELECT * FROM Organizacija_1 WHERE ID=2";
$rezultat2=mysql_query($poziv2);
$poziv3="SELECT * FROM Organizacija_1 WHERE ID=3";
$rezultat3=mysql_query($poziv3);
$poziv4="SELECT * FROM Organizacija_1 WHERE ID=4";
$rezultat4=mysql_query($poziv4);
$poziv5="SELECT * FROM Organizacija_1 WHERE ID=5";
$rezultat5=mysql_query($poziv5);
$poziv6="SELECT * FROM Organizacija_1 WHERE ID=6";
$rezultat6=mysql_query($poziv6);
$poziv7="SELECT * FROM Organizacija_1 WHERE ID=7";
$rezultat7=mysql_query($poziv7);
$poziv8="SELECT * FROM Organizacija_1 WHERE ID=8";
$rezultat8=mysql_query($poziv8);
$poziv9="SELECT * FROM Organizacija_1 WHERE ID=9";
$rezultat9=mysql_query($poziv9);
$poziv10="SELECT * FROM Organizacija_1 WHERE ID=10";
$rezultat10=mysql_query($poziv10);

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
if(!$rezultat5){
   die('GRESKA U UPITU: ' . mysql_error());		
   exit;
}
if(!$rezultat6){
   die('GRESKA U UPITU: ' . mysql_error());		
   exit;
}
if(!$rezultat7){
   die('GRESKA U UPITU: ' . mysql_error());		
   exit;
}
if(!$rezultat8){
   die('GRESKA U UPITU: ' . mysql_error());		
   exit;
}
if(!$rezultat9){
   die('GRESKA U UPITU: ' . mysql_error());		
   exit;
}
if(!$rezultat10){
   die('GRESKA U UPITU: ' . mysql_error());		
   exit;
}

echo "<center><h1>Организцаија предузећа</h1></center></br></br>";
echo "<h2>Органи предузећа</h2></br></br>";


while($ispis1=mysql_fetch_array($rezultat1))
{
echo "<h3>Управни одбор:</h3>";
echo "".$ispis1['Funkcija'].", ".$ispis1['Ime_i_prezime'].", ".$ispis1['Titula']."".$ispis1['Telefon']."".$ispis1['Faks']."</br></br>";
}
while($ispis2=mysql_fetch_array($rezultat2))
{
echo "<h3>Надзорни одбор:</h3>";
echo "".$ispis2['Funkcija'].", ".$ispis2['Ime_i_prezime']."".$ispis2['Titula']."".$ispis2['Telefon']."".$ispis2['Faks']."</br></br>";
}
while($ispis3=mysql_fetch_array($rezultat3))
{
echo "<h3>".$ispis3['Funkcija']."</h3>".$ispis3['Ime_i_prezime'].", ".$ispis3['Titula'].", телефон: ".$ispis3['Telefon'].", факс: ".$ispis3['Faks']."</br></br>";
}
while($ispis4=mysql_fetch_array($rezultat4))
{
echo "<h3>".$ispis4['Funkcija']."</h3>".$ispis4['Ime_i_prezime'].", ".$ispis4['Titula'].", телефон: ".$ispis4['Telefon'].", факс: ".$ispis4['Faks']."</br></br>";
}
while($ispis5=mysql_fetch_array($rezultat5))
{
echo "<h3>".$ispis5['Funkcija']."</h3>".$ispis5['Ime_i_prezime'].", ".$ispis5['Titula'].", телефон: ".$ispis5['Telefon'].", факс: ".$ispis5['Faks']."</br></br>";
}
while($ispis6=mysql_fetch_array($rezultat6))
{
echo "<h3>".$ispis6['Funkcija']."</h3>".$ispis6['Ime_i_prezime'].", ".$ispis6['Titula'].", телефон: ".$ispis6['Telefon'].", факс: ".$ispis6['Faks']."</br></br>";
}
while($ispis7=mysql_fetch_array($rezultat7))
{
echo "<h3>".$ispis7['Funkcija']."</h3>".$ispis7['Ime_i_prezime'].", ".$ispis7['Titula'].", телефон: ".$ispis7['Telefon'].", факс: ".$ispis7['Faks']."</br></br>";
}
while($ispis8=mysql_fetch_array($rezultat8))
{
echo "<h3>".$ispis8['Funkcija']."</h3>".$ispis8['Ime_i_prezime'].", ".$ispis8['Titula'].", телефон: ".$ispis8['Telefon'].", факс: ".$ispis8['Faks']."</br></br>";
}
while($ispis9=mysql_fetch_array($rezultat9))
{
echo "<h3>".$ispis9['Funkcija']."</h3>".$ispis9['Ime_i_prezime'].", ".$ispis9['Titula'].", телефон: ".$ispis9['Telefon'].", факс: ".$ispis9['Faks']."</br></br>";
}
while($ispis10=mysql_fetch_array($rezultat10))
{
echo "<h3>".$ispis10['Funkcija']."</h3>".$ispis10['Ime_i_prezime'].", ".$ispis10['Titula'].", телефон: ".$ispis10['Telefon'].", факс: ".$ispis10['Faks']."</br></br>";
}
mysql_close($con);
?>   
  </div>
  <!-- End Right Column -->
  
  <!-- Begin Footer -->
  <div id="footer"> Подножје </div>
  <!-- End Footer -->
 </div>
<!-- End Wrapper -->
</body>
</html>