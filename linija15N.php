<div id="uzi2">
<?php
$con = mysql_connect("mysql1.000webhost.com","a3499847_admin","admin12345");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("a3499847_gsp", $con);

$linija="SELECT * FROM Nocne_linije WHERE ID=2";
$linija_rezultat=mysql_query($linija);
$linija_ispis=mysql_fetch_array($linija_rezultat);

$polasci1="SELECT * FROM Vremena_nocne WHERE ID=3";
$polasci1_rezultat=mysql_query($polasci1);
$polasci1_ispis=mysql_fetch_array($polasci1_rezultat);
$polasci2="SELECT * FROM Vremena_nocne WHERE ID=4";
$polasci2_rezultat=mysql_query($polasci2);
$polasci2_ispis=mysql_fetch_array($polasci2_rezultat);

if(!$linija_rezultat){
    die('GREŠKA U UPITU: '.mysql_error());
}
elseif (!$polasci1_rezultat) 
    die('GREŠKA U UPITU: '.mysql_error());
elseif (!$polasci2_rezultat) 
    die('GREŠKA U UPITU: '.mysql_error());

    echo "<h2>Линија ".$linija_ispis['Broj_linije']."</h2>";
    echo "<h3>".$linija_ispis['Trasa']."</h3>";
//    echo "<p>Траса: ".$linija_ispis['Ulice']."</p>";
    
mysql_close($con);
?>
<p class="nocne"><?php echo "ТРАСА: ".$linija_ispis['Ulice']; ?></p>

<ul class='nocneTab'>
    <li class="zaglavlje5"><?php echo $polasci1_ispis['Prvo_stajaliste'];?></li>
    <li class="zaglavlje5"><?php echo $polasci1_ispis['Drugo_stajaliste'];?></li>
    <li class="zaglavlje5"><?php echo $polasci1_ispis['Trece_stajaliste'];?></li>
    <li><?php echo $polasci1_ispis['Vreme_11'];?></li>
    <li><?php echo $polasci1_ispis['Vreme_12'];?></li>
    <li><?php echo $polasci1_ispis['Vreme_13'];?></li>
    <li><?php echo $polasci1_ispis['Vreme_21'];?></li>
    <li><?php echo $polasci1_ispis['Vreme_22'];?></li>
    <li><?php echo $polasci1_ispis['Vreme_23'];?></li>
    <li><?php echo $polasci1_ispis['Vreme_31'];?></li>
    <li><?php echo $polasci1_ispis['Vreme_32'];?></li>
    <li><?php echo $polasci1_ispis['Vreme_33'];?></li>
</ul>

<ul class='nocneTab'>
    <li class="zaglavlje5"><?php echo $polasci2_ispis['Prvo_stajaliste'];?></li>
    <li class="zaglavlje5"><?php echo $polasci2_ispis['Drugo_stajaliste'];?></li>
    <li class="zaglavlje5"><?php echo $polasci2_ispis['Trece_stajaliste'];?></li>
    <li><?php echo $polasci2_ispis['Vreme_11'];?></li>
    <li><?php echo $polasci2_ispis['Vreme_12'];?></li>
    <li><?php echo $polasci2_ispis['Vreme_13'];?></li>
    <li><?php echo $polasci2_ispis['Vreme_21'];?></li>
    <li><?php echo $polasci2_ispis['Vreme_22'];?></li>
    <li><?php echo $polasci2_ispis['Vreme_23'];?></li>
    <li><?php echo $polasci2_ispis['Vreme_31'];?></li>
    <li><?php echo $polasci2_ispis['Vreme_32'];?></li>
    <li><?php echo $polasci2_ispis['Vreme_33'];?></li>
</ul>
</div>