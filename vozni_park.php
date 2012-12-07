<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ГСП Београд | Возни парк</title>
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
	
#vozni_park{
width:480px;
border-collapse:collapse;
}
#vozni_park td, #vozni_park th {
border:1px solid #003399;
}
#vozni_park th {
text-align:center;
background-color:#003399;
color:#FFFFFF;
}
#vozni_park td.alt{
color:#000000;
background-color:#99ccff;
}
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
  <center><h1>Структура возног парка</h1></center><br><br>
<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv1="SELECT Vrsta FROM Vozni_park WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$redovi1=mysql_numrows($rezultat1);//kupi broj vracenih redova iz upita
$poziv2="SELECT * FROM Vozni_park WHERE Vrsta='Трамваји'";
$rezultat2=mysql_query($poziv2);
$redovi2=mysql_numrows($rezultat2);	
$poziv3="SELECT Vrsta FROM Vozni_park WHERE ID=3";
$rezultat3=mysql_query($poziv3);
$redovi3=mysql_numrows($rezultat3);
$poziv4="SELECT * FROM Vozni_park WHERE Vrsta='Тролејбуси'";
$rezultat4=mysql_query($poziv4);
$redovi4=mysql_numrows($rezultat4);
$poziv5="SELECT Vrsta FROM Vozni_park WHERE ID=6";
$rezultat5=mysql_query($poziv5);
$redovi5=mysql_numrows($rezultat5);
$poziv6="SELECT * FROM Vozni_park WHERE Vrsta='Аутобуси'";
$rezultat6=mysql_query($poziv6);
$redovi6=mysql_numrows($rezultat6);
$poziv7="SELECT Vrsta FROM Vozni_park WHERE ID=9";
$rezultat7=mysql_query($poziv7);
$redovi7=mysql_numrows($rezultat7);
$poziv8="SELECT * FROM Vozni_park WHERE Vrsta='Укупан број возила'";
$rezultat8=mysql_query($poziv8);
$redovi8=mysql_numrows($rezultat8);

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
	echo "<center><h2>".$ispis1['Vrsta']."</h2></center></br>";
}
mysql_close($con);
?> 
<!-- Prva tabela -->
<center><table id="vozni_park">
<tr>
<th width="100">Тип</th>
<th width="100">Број возила</th>
<th width="150">Просечна старост</th>
</tr>

<?php //parametri prvog poziva
$i1=0;
while ($i1 < $redovi2){
	$f1=mysql_result($rezultat2, $i1, "Tip");
	$f2=mysql_result($rezultat2, $i1, "Broj_vozila");
	$f3=mysql_result($rezultat2, $i1, "Prosecna_starost");
?>

<tr>
<td><center><?php echo $f1; ?></center></td>
<td><center><?php echo $f2; ?></center></td>
<td><center><?php echo $f3; ?></center></td>
</tr>
<?php
$i1++;
}	//kraj prve while petlje
?>
</table> <!-- Kraj prve tabele -->
<br><br><br>

<?php	// drugi naslov 
$ispis2=mysql_fetch_array($rezultat3);
echo "<center><h2>".$ispis2['Vrsta']."</h2></center></br>";
?>

<!-- Druga tabela -->
<table id="vozni_park">
<tr>
<th width="100">Тип</th>
<th width="100">Број возила</th>
<th width="150">Просечна старост</th>
</tr>

<?php	//paramteri drugog poziva
$i2=0;
while ($i2 < $redovi4){
	$f4=mysql_result($rezultat4, $i2, "Tip");
	$f5=mysql_result($rezultat4, $i2, "Broj_vozila");
	$f6=mysql_result($rezultat4, $i2, "Prosecna_starost");
?>
<tr>
<td><center><?php echo $f4; ?></center></td>
<td><center><?php echo $f5; ?></center></td>
<td><center><?php echo $f6; ?></center></td>
</tr>
<?php
$i2++;
}	//kraj druge while petlje
?>
</table>	<!-- Kraj druge tabele -->
<br><br><br>

<?php	// treci naslov 
$ispis3=mysql_fetch_array($rezultat5);
echo "<center><h2>".$ispis3['Vrsta']."</h2></center></br>";
?>
<!-- Treca tabela -->
<table id="vozni_park">
<tr>
<th width="100">Тип</th>
<th width="100">Број возила</th>
<th width="150">Просечна старост</th>
</tr>

<?php	//paramteri treceg poziva
$i3=0;
while ($i3 < $redovi6){
	$f7=mysql_result($rezultat6, $i3, "Tip");
	$f8=mysql_result($rezultat6, $i3, "Broj_vozila");
	$f9=mysql_result($rezultat6, $i3, "Prosecna_starost");
?>

<tr>
<td><center><?php echo $f7; ?></center></td>
<td><center><?php echo $f8; ?></center></td>
<td><center><?php echo $f9; ?></center></td>
</tr>

<?php
$i3++;
}	//kraj treće while petlje
?>
</table>	<!-- Kraj treće tabele -->
<br><br><br>

<?php	// četvrti naslov 
$ispis4=mysql_fetch_array($rezultat7);
echo "<center><h2>".$ispis4['Vrsta']."</h2></center></br>";
?>

<!-- Četvrta tabela -->
<table id="vozni_park">
<tr>
<th width="100">Тип</th>
<th width="100">Број возила</th>
<th width="150">Просечна старост</th>
</tr>

<?php	//paramteri četvrtog poziva
$i4=0;
while ($i4 < $redovi8){
	$f10=mysql_result($rezultat8, $i4, "Tip");
	$f11=mysql_result($rezultat8, $i4, "Broj_vozila");
	$f12=mysql_result($rezultat8, $i4, "Prosecna_starost");
?>
<tr>
<td><center><?php echo $f10; ?></center></td>
<td><center><?php echo $f11; ?></center></td>
<td><center><?php echo $f12; ?></center></td>
</tr>
<?php
$i4++;
}	//kraj četvrte while petlje
?>
</table>	<!-- Kraj četvrte tabele -->
</center>
  </div>
  <!-- End Right Column -->
  
  <!-- Begin Footer -->
  <div id="footer"> Подножје </div>
  <!-- End Footer -->
 </div>
<!-- End Wrapper -->
</body>
</html>
