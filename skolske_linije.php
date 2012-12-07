<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ГСП Београд | Школске линије</title>
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
	
#linije{
width:480px;
border-collapse:collapse;
}
#linije td, #linije th {
border:1px solid #003399;
}
#linije th {
text-align:center;
background-color:#003399;
color:#FFFFFF;
}
#linije td.alt{
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
$poziv1="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$ispis1=mysql_fetch_array($rezultat1);
$poziv2="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=2";
$rezultat2=mysql_query($poziv2);
$ispis2=mysql_fetch_array($rezultat2);
$poziv3="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=3";
$rezultat3=mysql_query($poziv3);
$ispis3=mysql_fetch_array($rezultat3);
$poziv4="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=4";
$rezultat4=mysql_query($poziv4);
$ispis4=mysql_fetch_array($rezultat4);
$poziv5="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=5";
$rezultat5=mysql_query($poziv5);
$ispis5=mysql_fetch_array($rezultat5);

$poziv6="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=6";
$rezultat6=mysql_query($poziv6);
$ispis6=mysql_fetch_array($rezultat6);
$poziv7="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=7";
$rezultat7=mysql_query($poziv7);
$ispis7=mysql_fetch_array($rezultat7);
$poziv8="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=8";
$rezultat8=mysql_query($poziv8);
$ispis8=mysql_fetch_array($rezultat8);
$poziv9="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=9";
$rezultat9=mysql_query($poziv9);
$ispis9=mysql_fetch_array($rezultat9);
$poziv10="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=10";
$rezultat10=mysql_query($poziv10);
$ispis10=mysql_fetch_array($rezultat10);
$poziv11="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=11";
$rezultat11=mysql_query($poziv11);
$ispis11=mysql_fetch_array($rezultat11);
$poziv12="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=12";
$rezultat12=mysql_query($poziv12);
$ispis12=mysql_fetch_array($rezultat12);
$poziv13="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=13";
$rezultat13=mysql_query($poziv13);
$ispis13=mysql_fetch_array($rezultat13);
$poziv14="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=14";
$rezultat14=mysql_query($poziv14);
$ispis14=mysql_fetch_array($rezultat14);
$poziv15="SELECT Linija, Sadrzaj FROM Skolske_linije WHERE ID=15";
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

mysql_close($con);
?> 
<center><h1>Школске линије</h1><br><br>
<h3>Превоз деце са посебним потребама је организован аутобусима на следећим линијама:</h3><br></center>
<center><table id="linije"> <!-- Tabela školske linije 1-->
	<tr>
		<th width="80">Линија</th>
		<th width="400">Опис</th>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis1['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis1['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis2['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis2['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis3['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis3['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis4['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis4['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis5['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis5['Sadrzaj'];?></a></center></td>
	</tr>
</table></center><br><br><br>

<center><h3>Превоз деце до редовних основних школа је организован аутобусима на следећим линијама:</h3><br></center>
<center><table id="linije"> <!-- Tabela školske linije 1-->
	<tr>
		<th width="80">Линија</th>
		<th width="400">Опис</th>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis6['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis6['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis7['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis7['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis8['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis8['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis9['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis9['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis10['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis11['Sadrzaj'];?></a></center></td>
	</tr>
		<tr>
		<td class="alt"><center><b><?php echo $ispis11['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis11['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis12['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis12['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis13['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis13['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis14['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis14['Sadrzaj'];?></a></center></td>
	</tr>
	<tr>
		<td class="alt"><center><b><?php echo $ispis15['Linija'];?></a></b></center></td>
		<td><center><?php echo $ispis15['Sadrzaj'];?></a></center></td>
	</tr>
</table></center><br><br>

  </div>
  <!-- End Right Column -->
  
  <!-- Begin Footer -->
  <div id="footer"> Подножје </div>
  <!-- End Footer -->
 </div>
<!-- End Wrapper -->
</body>
</html>
