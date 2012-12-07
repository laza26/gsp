<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ГСП Београд | Линија 2</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styles_2cl.css" />
<link rel="shortcut icon" href="images/icon.png">

	<!-- Slider -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<!-- End Slider -->
	
	<!-- Glavni meni -->
	<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/dropdown/themes/default/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
	<!-- / END -->
	
	<script src="js/menus.js" type="text/javascript"></script>

	<style type="text/css">
p1{font-size:10px;}
		<!--
	body { background-image: url(images/background/blue.png);
		background-repeat: repeat-x;
		}
	-->

#stajalista{
width:100%;
border-collapse:collapse;
}
#stajalista td, #stajalista th {
border:1px solid #003399;
}
#stajalista th {
text-align:center;
background-color:#003399;
color:#FFFFFF;
}
	
#polasci
{
width:600px;
border-collapse:collapse;
}
#polasci td, #polasci th 
{
border:1px solid #0066cc;
}
#polasci th 
{
text-align:center;
background-color:#0066cc;
color:#FFFFFF;
}
#polasci tr.alt td 
{
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

<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv1="SELECT * FROM Tramvajske_linije WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$redovi1=mysql_numrows($rezultat1);
$poziv2="SELECT * FROM Tramvajske_linije WHERE ID=2";
$rezultat2=mysql_query($poziv2);
$redovi2=mysql_numrows($rezultat2);

$poziv3="SELECT * FROM Polasci_tramvaji WHERE ID=1";
$rezultat3=mysql_query($poziv3);
$ispis3=mysql_fetch_array($rezultat3);
$poziv4="SELECT * FROM Polasci_tramvaji WHERE ID=3";
$rezultat4=mysql_query($poziv4);
$ispis4=mysql_fetch_array($rezultat4);
$poziv5="SELECT * FROM Polasci_tramvaji WHERE ID=5";
$rezultat5=mysql_query($poziv5);
$ispis5=mysql_fetch_array($rezultat5);
$poziv6="SELECT * FROM Polasci_tramvaji WHERE ID=2";
$rezultat6=mysql_query($poziv6);
$ispis6=mysql_fetch_array($rezultat6);
$poziv7="SELECT * FROM Polasci_tramvaji WHERE ID=4";
$rezultat7=mysql_query($poziv7);
$ispis7=mysql_fetch_array($rezultat7);
$poziv8="SELECT * FROM Polasci_tramvaji WHERE ID=6";
$rezultat8=mysql_query($poziv8);
$ispis8=mysql_fetch_array($rezultat8);


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

while($ispis1=mysql_fetch_array($rezultat1))
{
	echo "<center><h2>Линија ".$ispis1['Broj_linije']."</h2></center></br>";
	echo "<center><h3>".$ispis1['Trasa']."</h3></center></br></br>";
}	
mysql_close($con);	
?>
	
<center><table id="stajalista">	<!-- Tabela stajalista -->
	<tr>
		<th>Смер</th>
		<th>Улице</th>
		<th>Стајалишта</th>
	</tr>
	
<?php //parametri prvog poziva
$i1=0;
while ($i1 < $redovi1){
	$f1=mysql_result($rezultat1, $i1, "Smer");
	$f2=mysql_result($rezultat1, $i1, "Ulice");
	$f3=mysql_result($rezultat1, $i1, "Stajalista");
?>

<tr>
	<td><center><?php echo $f1; ?></center></td>
	<td><center><?php echo $f2; ?></center></td>
	<td><center><p1><?php echo $f3; ?></p1></center></td>
</tr>
<?php
$i1++;
}	//kraj prve while petlje
?>

<?php //parametri drugog poziva
$i2=0;
while ($i2 < $redovi2){
	$f4=mysql_result($rezultat2, $i2, "Smer");
	$f5=mysql_result($rezultat2, $i2, "Ulice");
	$f6=mysql_result($rezultat2, $i2, "Stajalista");
?>

<tr>
	<td><center><?php echo $f4; ?></center></td>
	<td><center><?php echo $f5; ?></center></td>
	<td><center><p1><?php echo $f6; ?></p1></center></td>
</tr>
<?php
$i2++;
}	//kraj druge while petlje
?>
</table></center> <!-- Kraj tabele stajališta -->
<br><br>
<center><h3>Поласци са терминуса</h3></center><br>

<!-- Tabela polazaka terminus 1-->
<center><table id="polasci">
	<tr>
	<th colspan="9"><?php echo $ispis3['Terminus'];?> (Смер А)</th>
	</tr>
	<tr class="alt">
		<td colspan="3"></td>
		<td colspan="3"><center><b>Прва три:</b></center></td>
		<td colspan="3"><center><b>Последња три:</b></center></td>
	</tr>
	<tr>
		<td colspan="3"><center><b><?php echo $ispis3['Dan']; ?></b></center></td>
		<td><center><?php echo $ispis3['Prvi_polazak'];?></center></td>
		<td><center><?php echo $ispis3['Drugi_polazak'];?></center></td>
		<td><center><?php echo $ispis3['Treci_polazak'];?></center></td>
		<td><center><?php echo $ispis3['Treci_od_pozadi'];?></center></td>
		<td><center><?php echo $ispis3['Pretposlednji'];?></center></td>
		<td><center><?php echo $ispis3['Poslednji'];?></center></td>		
	</tr>
	<tr>
		<td colspan="3"><center><b><?php echo $ispis4['Dan']; ?></b></center></td>
		<td><center><?php echo $ispis4['Prvi_polazak'];?></center></td>
		<td><center><?php echo $ispis4['Drugi_polazak'];?></center></td>
		<td><center><?php echo $ispis4['Treci_polazak'];?></center></td>
		<td><center><?php echo $ispis4['Treci_od_pozadi'];?></center></td>
		<td><center><?php echo $ispis4['Pretposlednji'];?></center></td>
		<td><center><?php echo $ispis4['Poslednji'];?></center></td>		
	</tr>
		<tr>
		<td colspan="3"><center><b><?php echo $ispis5['Dan']; ?></b></center></td>
		<td><center><?php echo $ispis5['Prvi_polazak'];?></center></td>
		<td><center><?php echo $ispis5['Drugi_polazak'];?></center></td>
		<td><center><?php echo $ispis5['Treci_polazak'];?></center></td>
		<td><center><?php echo $ispis5['Treci_od_pozadi'];?></center></td>
		<td><center><?php echo $ispis5['Pretposlednji'];?></center></td>
		<td><center><?php echo $ispis5['Poslednji'];?></center></td>		
	</tr>
</table></center><br><br>
<!-- Kraj prve tabele polazaka -->

<!-- Tabela polazaka terminus 2-->
<center><table id="polasci">
	<tr>
	<th colspan="9"><?php echo $ispis3['Terminus'];?> (Смер Б)</th>
	</tr>
	<tr class="alt">
		<td colspan="3"></td>
		<td colspan="3"><center><b>Прва три:</b></center></td>
		<td colspan="3"><center><b>Последња три:</b></center></td>
	</tr>
	<tr>
		<td colspan="3"><center><b><?php echo $ispis6['Dan']; ?></b></center></td>
		<td><center><?php echo $ispis6['Prvi_polazak'];?></center></td>
		<td><center><?php echo $ispis6['Drugi_polazak'];?></center></td>
		<td><center><?php echo $ispis6['Treci_polazak'];?></center></td>
		<td><center><?php echo $ispis6['Treci_od_pozadi'];?></center></td>
		<td><center><?php echo $ispis6['Pretposlednji'];?></center></td>
		<td><center><?php echo $ispis6['Poslednji'];?></center></td>		
	</tr>
	<tr>
		<td colspan="3"><center><b><?php echo $ispis7['Dan']; ?></b></center></td>
		<td><center><?php echo $ispis7['Prvi_polazak'];?></center></td>
		<td><center><?php echo $ispis7['Drugi_polazak'];?></center></td>
		<td><center><?php echo $ispis7['Treci_polazak'];?></center></td>
		<td><center><?php echo $ispis7['Treci_od_pozadi'];?></center></td>
		<td><center><?php echo $ispis7['Pretposlednji'];?></center></td>
		<td><center><?php echo $ispis7['Poslednji'];?></center></td>		
	</tr>
		<tr>
		<td colspan="3"><center><b><?php echo $ispis8['Dan']; ?></b></center></td>
		<td><center><?php echo $ispis8['Prvi_polazak'];?></center></td>
		<td><center><?php echo $ispis8['Drugi_polazak'];?></center></td>
		<td><center><?php echo $ispis8['Treci_polazak'];?></center></td>
		<td><center><?php echo $ispis8['Treci_od_pozadi'];?></center></td>
		<td><center><?php echo $ispis8['Pretposlednji'];?></center></td>
		<td><center><?php echo $ispis8['Poslednji'];?></center></td>		
	</tr>
</table></center><br>
<!-- Kraj druge tabele polazaka -->

  </div>
  <!-- End Right Column -->
  
  <!-- Begin Footer -->
  <div id="footer"> Подножје </div>
  <!-- End Footer -->
 </div>
<!-- End Wrapper -->
</body>
</html>
