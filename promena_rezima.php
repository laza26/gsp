<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ГСП Београд | Промена режима</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styles_3cl.css" />
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
	
	<!-- 
		a:link {text-decoration:none; color: #000000;}
		a:visited {text-decoration:none; color: #000000;}
		a:hover {text-decoration:underline;}
		a:active {text-decoration:underline;}
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
  
  <!-- Begin Left Column -->
  <div id="leftcolumn">
  <h2>Пречице:</h2><br>
  <center><table id="levi_meni">
	<tr><td><a href="dnevne_linije.php"><img src="images/buttons/mali_meni/dl2.png" name="dl" alt="Дневне линије" onMouseover="document.dl.src=dl_over.src;" onClick="document.dl.src=dl_default.src;" onMouseout="document.dl.src=dl_default.src;" style="border:0;"></a></td></tr>
	<tr><td><a href="nocne_linije.php"><img src="images/buttons/mali_meni/nl2.png" name="nl" alt="Ноћне линије" onMouseover="document.nl.src=nl_over.src;" onClick="document.nl.src=nl_default.src;" onMouseout="document.nl.src=nl_default.src;" style="border:0;"></a></td></tr>
	<tr><td><a href="karte_i_markice.php"><img src="images/buttons/mali_meni/kim2.png" name="kim" alt="Карте и маркице" onMouseover="document.kim.src=kim_over.src;" onClick="document.kim.src=kim_default.src;" onMouseout="document.kim.src=kim_default.src;" style="border:0;"></a></td></tr>
	<tr><td><a href="promena_rezima.php"><img src="images/buttons/mali_meni/ir2.png" name="ir" alt="Измене режима" onMouseover="document.ir.src=ir_over.src;" onClick="document.ir.src=ir_default.src;" onMouseout="document.ir.src=ir_default.src;" style="border:0;"></a></td></tr>
  </table></center>
  </div>
  <!-- End Left Column -->
  
  <!-- Begin Content Column -->
  <div id="content_pr">
<?php
	$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv1="SELECT Naziv, Sadrzaj FROM Promena_rezima WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$ispis1=mysql_fetch_array($rezultat1);
$poziv2="SELECT Naziv, Sadrzaj FROM Promena_rezima WHERE ID=2";
$rezultat2=mysql_query($poziv2);
$ispis2=mysql_fetch_array($rezultat2);
$poziv3="SELECT Naziv, Sadrzaj FROM Promena_rezima WHERE ID=3";
$rezultat3=mysql_query($poziv3);
$ispis3=mysql_fetch_array($rezultat3);
$poziv4="SELECT Naziv, Sadrzaj FROM Promena_rezima WHERE ID=4";
$rezultat4=mysql_query($poziv4);
$ispis4=mysql_fetch_array($rezultat4);

if(!$rezultat1){
   die('GRESKA U UPITU: ' . mysql_error());
}
	else if(!$rezultat2)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat3)
	die('GRESKA U UPITU: ' . mysql_error());
	else if(!$rezultat4)
	die('GRESKA U UPITU: ' . mysql_error());	
	
mysql_close($con);
?>
<center><p1><b>Измене у режиму саобраћаја линија ГСП</b></p1></center><br>
<a href="<?$PHP_SELF?>?p=1"> <?php echo "<center>".$ispis1['Naziv']."</center>";?> </a> <br><br>
<a href="<?$PHP_SELF?>?p=2"> <?php echo "<center>".$ispis2['Naziv']."</center>";?> </a> <br><br>
<a href="<?$PHP_SELF?>?p=3"> <?php echo "<center>".$ispis3['Naziv']."</center>";?> </a> <br><br>
<a href="<?$PHP_SELF?>?p=4"> <?php echo "<center>".$ispis4['Naziv']."</center>";?> </a> <br><br>
  </div>
  <!-- End Content Column -->
  
  <!-- Begin Right Column -->
  <div id="rightcolumn_pr">
<?php
error_reporting (E_ALL ^ E_NOTICE);
 
	if ($_REQUEST ['p']=='1'){
		echo "<center><h3>".$ispis1['Naziv']."</h3></center><br>";
		echo $ispis1['Sadrzaj'];
	}
		else if ($_REQUEST ['p']=='2'){
			echo "<center><h3>".$ispis2['Naziv']."</h3></center><br>";
			echo $ispis2['Sadrzaj'];}
		
		else if ($_REQUEST ['p']=='3'){
			echo "<center><h3>".$ispis3['Naziv']."</h3></center><br>";
			echo $ispis3['Sadrzaj'];}
		
		else if ($_REQUEST ['p']=='4'){
			echo "<center><h3>".$ispis4['Naziv']."</h3></center><br>";
			echo $ispis4['Sadrzaj'];}
		
		else echo "<center><h3>".$ispis1['Naziv']."</h3></center><br>".$ispis1['Sadrzaj']."";	
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
