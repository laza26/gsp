<?php
$con = mysql_connect("mysql1.000webhost.com","a3499847_admin","admin12345");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("a3499847_gsp", $con);
$poziv1="SELECT * FROM Autobuske_linije WHERE ID=1";
$rezultat1=mysql_query($poziv1);
$redovi1=mysql_numrows($rezultat1);
$poziv2="SELECT * FROM Autobuske_linije WHERE ID=2";
$rezultat2=mysql_query($poziv2);
$redovi2=mysql_numrows($rezultat2);

$poziv3="SELECT * FROM Polasci_autobusi WHERE ID=1";
$rezultat3=mysql_query($poziv3);
$ispis3=mysql_fetch_array($rezultat3);
$poziv4="SELECT * FROM Polasci_autobusi WHERE ID=3";
$rezultat4=mysql_query($poziv4);
$ispis4=mysql_fetch_array($rezultat4);
$poziv5="SELECT * FROM Polasci_autobusi WHERE ID=5";
$rezultat5=mysql_query($poziv5);
$ispis5=mysql_fetch_array($rezultat5);
$poziv6="SELECT * FROM Polasci_autobusi WHERE ID=2";
$rezultat6=mysql_query($poziv6);
$ispis6=mysql_fetch_array($rezultat6);
$poziv7="SELECT * FROM Polasci_autobusi WHERE ID=4";
$rezultat7=mysql_query($poziv7);
$ispis7=mysql_fetch_array($rezultat7);
$poziv8="SELECT * FROM Polasci_autobusi WHERE ID=6";
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
	echo "<h2>Линија ".$ispis1['Broj_linije']."</h2>";
	echo "<h3>".$ispis1['Trasa']."</h3>";
}	
mysql_close($con);	
?>
	
<table class="stajalista">
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
	<td><?php echo $f1; ?></td>
	<td><?php echo $f2; ?></td>
	<td class="smalltext"><?php echo $f3; ?></td>
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
	<td><?php echo $f4; ?></td>
	<td><?php echo $f5; ?></td>
	<td class="smalltext"><?php echo $f6; ?></td>
</tr>
<?php
$i2++;
}	//kraj druge while petlje
?>
</table>
<!-- Kraj tabele stajališta -->
<br><br>
<h3>Поласци са терминуса</h3>

<!-- Tabela polazaka terminus 1-->
<table class="polasci">
	<tr>
	<th colspan="9"><?php echo $ispis3['Terminus'];?> (Смер А)</th>
	</tr>
	<tr class="alt">
		<td colspan="3"></td>
		<td colspan="3"><b>Прва три:</b></td>
		<td colspan="3"><b>Последња три:</b></td>
	</tr>
	<tr>
		<td colspan="3"><b><?php echo $ispis3['Dan']; ?></b></td>
		<td><?php echo $ispis3['Prvi_polazak'];?></td>
		<td><?php echo $ispis3['Drugi_polazak'];?></td>
		<td><?php echo $ispis3['Treci_polazak'];?></td>
		<td><?php echo $ispis3['Treci_od_pozadi'];?></td>
		<td><?php echo $ispis3['Pretposlednji'];?></td>
		<td><?php echo $ispis3['Poslednji'];?></td>		
	</tr>
	<tr>
		<td colspan="3"><b><?php echo $ispis4['Dan']; ?></b></td>
		<td><?php echo $ispis4['Prvi_polazak'];?></td>
		<td><?php echo $ispis4['Drugi_polazak'];?></td>
		<td><?php echo $ispis4['Treci_polazak'];?></td>
		<td><?php echo $ispis4['Treci_od_pozadi'];?></td>
		<td><?php echo $ispis4['Pretposlednji'];?></td>
		<td><?php echo $ispis4['Poslednji'];?></td>		
	</tr>
		<tr>
		<td colspan="3"><b><?php echo $ispis5['Dan']; ?></b></td>
		<td><?php echo $ispis5['Prvi_polazak'];?></td>
		<td><?php echo $ispis5['Drugi_polazak'];?></td>
		<td><?php echo $ispis5['Treci_polazak'];?></td>
		<td><?php echo $ispis5['Treci_od_pozadi'];?></td>
		<td><?php echo $ispis5['Pretposlednji'];?></td>
		<td><?php echo $ispis5['Poslednji'];?></td>		
	</tr>
</table><br><br>
<!-- Kraj prve tabele polazaka -->

<!-- Tabela polazaka terminus 2-->
<table class="polasci">
    <tr>
        <th colspan="9"><?php echo $ispis3['Terminus'];?> (Смер Б)</th>
    </tr>
	<tr class="alt">
		<td colspan="3"></td>
		<td colspan="3"><b>Прва три:</b></td>
		<td colspan="3"><b>Последња три:</b></td>
	</tr>
	<tr>
		<td colspan="3"><b><?php echo $ispis6['Dan']; ?></b></td>
		<td><?php echo $ispis6['Prvi_polazak'];?></td>
		<td><?php echo $ispis6['Drugi_polazak'];?></td>
		<td><?php echo $ispis6['Treci_polazak'];?></td>
		<td><?php echo $ispis6['Treci_od_pozadi'];?></td>
		<td><?php echo $ispis6['Pretposlednji'];?></td>
		<td><?php echo $ispis6['Poslednji'];?></td>		
	</tr>
	<tr>
		<td colspan="3"><b><?php echo $ispis7['Dan']; ?></b></td>
		<td><?php echo $ispis7['Prvi_polazak'];?></td>
		<td><?php echo $ispis7['Drugi_polazak'];?></td>
		<td><?php echo $ispis7['Treci_polazak'];?></td>
		<td><?php echo $ispis7['Treci_od_pozadi'];?></td>
		<td><?php echo $ispis7['Pretposlednji'];?></td>
		<td><?php echo $ispis7['Poslednji'];?></td>		
	</tr>
		<tr>
		<td colspan="3"><b><?php echo $ispis8['Dan']; ?></b></td>
		<td><?php echo $ispis8['Prvi_polazak'];?></td>
		<td><?php echo $ispis8['Drugi_polazak'];?></td>
		<td><?php echo $ispis8['Treci_polazak'];?></td>
		<td><?php echo $ispis8['Treci_od_pozadi'];?></td>
		<td><?php echo $ispis8['Pretposlednji'];?></td>
		<td><?php echo $ispis8['Poslednji'];?></td>		
	</tr>
</table></br>
<!-- Kraj druge tabele polazaka -->