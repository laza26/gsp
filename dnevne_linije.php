<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ГСП Београд | Дневне линије</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styles_2cl.css" />
<link rel="shortcut icon" href="images/icon.png">

	<!-- Slider -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<!-- End slider -->
	
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
	
#tramvaji{
width:480px;
border-collapse:collapse;
}
#tramvaji td, #tramvaji th {
border:1px solid #003399;
}
#tramvaji th {
text-align:center;
background-color:#003399;
color:#FFFFFF;
}
#tramvaji td.alt{
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
  <div id="leftcolumn"> <h2>Пречице:</h2><br><br>
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

	echo "<center><h1>Списак дневних линија</h1></center></br>";
	echo "<center><h2>Трамвајске линије</h2></center></br></br>";
	
mysql_close($con);	
?>	
<center><table id="tramvaji"> <!-- Tabela tramvaji-->
	<tr>
		<th width="80">Број линије</th>
		<th width="400">Траса</th>
	</tr>
	<tr>
		<td class="alt"><center><b><a href="2.php" target="_blank"><?php echo $ispis1['Broj_linije'];?></a></b></center></td>
		<td><center><a href="2.php" target="_blank"><b><?php echo $ispis1['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><a href="3.php" target="_blank"><?php echo $ispis2['Broj_linije'];?></b></center></td>
		<td><center><a href="3.php" target="_blank"><b><?php echo $ispis2['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><a href="5.php" target="_blank"><center><b><?php echo $ispis3['Broj_linije'];?></a></b></center></td>
		<td><center><a href="5.php" target="_blank"><b><?php echo $ispis3['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><a href="6.php" target="_blank"><center><b><?php echo $ispis4['Broj_linije'];?></a></b></center></td>
		<td><center><a href="6.php" target="_blank"><b><?php echo $ispis4['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><a href="7.php" target="_blank"><center><b><?php echo $ispis5['Broj_linije'];?></a></b></center></td>
		<td><center><a href="7.php" target="_blank"><b><?php echo $ispis5['Trasa'];?></b></a></center></td>
	</tr>
</table></center> <!-- Kraj tabele tramvaji -->

</br></br><center><h2>Тролејбуске линије</h2></center></br></br>

<center><table id="tramvaji"> <!-- Tabela trolejbusi-->
	<tr>
		<th width="80">Број линије</th>
		<th width="400">Траса</th>
	</tr>
	<tr>
		<td class="alt"><center><b><a href="19.php" target="_blank"><?php echo $ispis6['Broj_linije'];?></a></b></center></td>
		<td><center><a href="19.php" target="_blank"><b><?php echo $ispis6['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><a href="21.php" target="_blank"><?php echo $ispis7['Broj_linije'];?></b></center></td>
		<td><center><a href="21.php" target="_blank"><b><?php echo $ispis7['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><a href="22.php" target="_blank"><center><b><?php echo $ispis8['Broj_linije'];?></a></b></center></td>
		<td><center><a href="22.php" target="_blank"><b><?php echo $ispis8['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><a href="28.php" target="_blank"><center><b><?php echo $ispis9['Broj_linije'];?></a></b></center></td>
		<td><center><a href="28.php" target="_blank"><b><?php echo $ispis9['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><a href="29.php" target="_blank"><center><b><?php echo $ispis10['Broj_linije'];?></a></b></center></td>
		<td><center><a href="29.php" target="_blank"><b><?php echo $ispis10['Trasa'];?></b></a></center></td>
	</tr>
</table></center> <!-- Kraj tabele trolejbusi -->

</br></br><center><h2>Аутобуске линије</h2></center></br></br>

<center><table id="tramvaji"> <!-- Tabela autobusi-->
	<tr>
		<th width="80">Број линије</th>
		<th width="400">Траса</th>
	</tr>
	<tr>
		<td class="alt"><center><b><a href="15.php" target="_blank"><?php echo $ispis11['Broj_linije'];?></a></b></center></td>
		<td><center><a href="15.php" target="_blank"><b><?php echo $ispis11['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><a href="16.php" target="_blank"><?php echo $ispis12['Broj_linije'];?></b></center></td>
		<td><center><a href="16.php" target="_blank"><b><?php echo $ispis12['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><a href="17.php" target="_blank"><center><b><?php echo $ispis13['Broj_linije'];?></a></b></center></td>
		<td><center><a href="17.php" target="_blank"><b><?php echo $ispis13['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><a href="18.php" target="_blank"><center><b><?php echo $ispis14['Broj_linije'];?></a></b></center></td>
		<td><center><a href="18.php" target="_blank"><b><?php echo $ispis14['Trasa'];?></b></a></center></td>
	</tr>
	<tr>
		<td class="alt"><a href="20.php" target="_blank"><center><b><?php echo $ispis15['Broj_linije'];?></a></b></center></td>
		<td><center><a href="20.php" target="_blank"><b><?php echo $ispis15['Trasa'];?></b></a></center></td>
	</tr>
</table></center> <!-- Kraj tabele autobusi -->

  </div>
  <!-- End Right Column -->
  
  <!-- Begin Footer -->
  <div id="footer"> Подножје </div>
  <!-- End Footer -->
 </div>
<!-- End Wrapper -->
</body>
</html>
