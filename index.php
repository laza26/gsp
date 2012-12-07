<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>ГСП Београд</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="shortcut icon" href="images/icon.png" />
	
	<!-- Nivo Slider -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<!-- End of Slider -->
        
	<!-- Glavni meni -->
		<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="css/dropdown/themes/default/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
	<!-- / END -->
	
	<link href="css/menu_assets/styles.css" rel="stylesheet" type="text/css" />
	
	<!-- Moji meniji -->
	<script src="js/menus.js" type="text/javascript"></script>
	<!-- End of Moji meniji -->
	
<!--	<style type="text/css">
	
	body { background-image: url(images/background/blue.png);
		background-repeat: repeat-x;
		} 
	
	</style>-->
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
  
  <!-- Begin Naviagtion -->
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
  <!-- End Naviagtion -->
  
  <!-- Begin Content -->
  <div id="content">
	<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv1="SELECT Naziv, Sadrzaj FROM Naslovna WHERE ID=1";
$rezulat1=mysql_query($poziv1);
$poziv2="SELECT Naziv, Sadrzaj FROM Naslovna WHERE ID=2";
$rezulat2=mysql_query($poziv2);

if(!$rezulat1){
   die('GRESKA U UPITU: ' . mysql_error());
   exit;
}
if(!$rezulat2){
   die('GRESKA U UPITU: ' . mysql_error());
   exit;
}

while($ispis1=mysql_fetch_array($rezulat1))
{
	echo "<h3><center>".$ispis1['Sadrzaj']."</center></h3></br></br>";
}
mysql_close($con);
?>
<br><center>
<table id="veliki_meni" border=0 cellspacing="4">
	<tr><td><a href="dnevne_linije.php" target="_blank"><img src="images/meni_naslovna/dnevne_linije.png" name="dnevne_linije" alt="Дневне линије" onMouseover="document.dnevne_linije.src=dnevne_linije_over.src;" onClick="document.dnevne_linije.src=dnevne_linije.src;" onMouseout="document.dnevne_linije.src=dnevne_linije_default.src;" style="border:0;"></a></td>
		<td><a href="nocne_linije.php" target="_blank"><img src="images/meni_naslovna/nocne_linije.png" name="nocne_linije" alt="Ноћне линије" onMouseover="document.nocne_linije.src=nocne_linije_over.src;" onClick="document.nocne_linije.src=nocne_linije.src;" onMouseout="document.nocne_linije.src=nocne_linije_default.src;" style="border:0;"></a></td>
		<td><a href="karte_i_markice.php" target="_blank"><img src="images/meni_naslovna/karte_i_markice.png" name="karte_i_markice" alt="Карте и маркице" onMouseover="document.karte_i_markice.src=karte_i_markice_over.src;" onClick="document.karte_i_markice.src=karte_i_markice.src;" onMouseout="document.karte_i_markice.src=karte_i_markice_default.src;" style="border:0;"></a></td>
		<td><a href="promena_rezima.php" target="_blank"><img src="images/meni_naslovna/izmene_rezima.png" name="izmene_rezima" alt="Измене режима" onMouseover="document.izmene_rezima.src=izmene_rezima_over.src;" onClick="document.izmene_rezima.src=izmene_rezima.src;" onMouseout="document.izmene_rezima.src=izmene_rezima_default.src;" style="border:0;"></td>
	</tr>
</table><br><br><br><br><br>

<?php
while ($ispis2=mysql_fetch_array($rezulat2))
{
	echo"<h4>".$ispis2['Sadrzaj']."</h4><br><br>";
}
?>
<a href="http://www.bgsaobracaj.rs" border=0 target=blank><img src="images/banners/szs.jpg"></a> &nbsp
<a href="http://www.uitp.org" border=0 target=blank><img src="images/banners/logo_UITP.gif" width="75px" height="58px"></a>
</center>
  </div>
  <!-- End Content -->
  
  <!-- Begin Footer -->
  <div id="footer"> 
      <ul class="footer_links">
        <li><a href="dnevne_linije.php" target="_blank">Дневне линије</a></li>
        <li><a href="nocne_linije.php" target="_blank">Ноћне линије</a></li>
        <li><a href="karte_i_markice.php" target="_blank">Карте и маркице</a></li>
        <li><a href="promena_rezima.php" target="_blank">Промене режима</a></li>
        <li><a href="informacije.php" target="_blank">Контакт</a></li>
      </ul>
  </div>
  <!-- End Footer -->
 </div>
<!-- End Wrapper -->
</body>
</html>
