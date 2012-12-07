<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ГСП Београд | Историја - од 1940. до данас</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styles_2cl.css" />
<link rel="shortcut icon" href="images/icon.png">

	<!-- lightbox -->
	<link href="css/lightbox.css" rel="stylesheet" />
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/lightbox.js"></script>
	<!-- end lightbox -->

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
  <center><h1>Од 1940. до данас</h1></center><br><br>
  	<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv1="SELECT Naziv, Sadrzaj FROM Istorija WHERE ID=7";
$rezultat1=mysql_query($poziv1);
$poziv2="SELECT Naziv, Sadrzaj FROM Istorija WHERE ID=8";
$rezultat2=mysql_query($poziv2);
$poziv3="SELECT Naziv, Sadrzaj FROM Istorija WHERE ID=9";
$rezultat3=mysql_query($poziv3);
$poziv4="SELECT Naziv, Sadrzaj FROM Istorija WHERE ID=10";
$rezultat4=mysql_query($poziv4);
$poziv5="SELECT Naziv, Sadrzaj FROM Istorija WHERE ID=11";
$rezultat5=mysql_query($poziv5);
$poziv6="SELECT Naziv, Sadrzaj FROM Istorija WHERE ID=12";
$rezultat6=mysql_query($poziv6);
$poziv7="SELECT Naziv, Sadrzaj FROM Istorija WHERE ID=13";
$rezultat7=mysql_query($poziv7);
$poziv8="SELECT Naziv, Sadrzaj FROM Istorija WHERE ID=14";
$rezultat8=mysql_query($poziv8);

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

while($ispis1=mysql_fetch_array($rezultat1))
{
	echo "<h3>".$ispis1['Naziv']."</h3>";
	echo "<p1>".$ispis1['Sadrzaj']."</p1></br></br>";
}
?>

<center>
<a href="galeries/istorija/1940-1950.jpg" rel="lightbox[ostatak]" title="1940.-1950."><img src='galeries/istorija/1940-1950_thumb.png'></a>
</center><br>

<?php

while ($ispis2=mysql_fetch_array($rezultat2))
{
	echo "<h3>".$ispis2['Naziv']."</h3>";
	echo"<p1>".$ispis2['Sadrzaj']."</p1></br></br>";
}
?>
<center>
<a href="galeries/istorija/1950-1960.jpg" rel="lightbox[ostatak]" title="1950.-1960."><img src='galeries/istorija/1950-1960_thumb.png'></a>
</center><br>

<?php
while($ispis3=mysql_fetch_array($rezultat3))
{
	echo "<h3>".$ispis3['Naziv']."</h3>";
	echo "<p1>".$ispis3['Sadrzaj']."</p1></br></br>";
}
?>

<center>
<a href="galeries/istorija/1960-1970.jpg" rel="lightbox[ostatak]" title="1960.-1970."><img src='galeries/istorija/1960-1970_thumb.png'></a>
</center><br>

<?php

while($ispis4=mysql_fetch_array($rezultat4))
{
	echo "<h3>".$ispis4['Naziv']."</h3>";
	echo "<p1>".$ispis4['Sadrzaj']."</p1></br></br>";
}
?>

<center>
<a href="galeries/istorija/1970-1980.jpg" rel="lightbox[ostatak]" title="1970.-1980."><img src='galeries/istorija/1970-1980_thumb.png'></a>
</center><br>

<?php

while($ispis5=mysql_fetch_array($rezultat5))
{
	echo "<h3>".$ispis5['Naziv']."</h3>";
	echo "<p1>".$ispis5['Sadrzaj']."</p1></br></br>";
}
?>

<center>
<a href="galeries/istorija/1980-1990.jpg" rel="lightbox[ostatak]" title="1980.-1990."><img src='galeries/istorija/1980-1990_thumb.png'></a>
</center><br>

<?php

while($ispis6=mysql_fetch_array($rezultat6))
{
	echo "<h3>".$ispis6['Naziv']."</h3>";
	echo "<p1>".$ispis6['Sadrzaj']."</p1></br></br>";
}
?>

<center>
<a href="galeries/istorija/1990-2000.jpg" rel="lightbox[ostatak]" title="1990.-2000."><img src='galeries/istorija/1990-2000_thumb.png'></a>
</center><br>

<?php

while($ispis7=mysql_fetch_array($rezultat7))
{
	echo "<h3>".$ispis7['Naziv']."</h3>";
	echo "<p1>".$ispis7['Sadrzaj']."</p1></br></br>";
}
?>

<center>
<a href="galeries/istorija/2000-2010.jpg" rel="lightbox[ostatak]" title="2000.-2010."><img src='galeries/istorija/2000-2010_thumb.png'></a>
</center><br>

<?php

while($ispis8=mysql_fetch_array($rezultat8))
{
	echo "<h3>".$ispis8['Naziv']."</h3>";
	echo "<p1>".$ispis8['Sadrzaj']."</p1></br></br>";
}
mysql_close($con);
?>
<center>
<a href="galeries/istorija/posle_2010.jpg" rel="lightbox[ostatak]" title="после 2010."><img src='galeries/istorija/posle_2010_thumb.png'></a>
</center><br>
  
  </div>
  <!-- End Right Column -->
  
  <!-- Begin Footer -->
  <div id="footer"> Подножје </div>
  <!-- End Footer -->
 </div>
<!-- End Wrapper -->
</body>
</html>
