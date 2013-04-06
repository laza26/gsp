<?php

$poziv = "SELECT * FROM " . $_REQUEST['tip'] . "_linije WHERE Broj_linije=" . $_REQUEST['broj'] . ' ORDER BY Smer';
$rezultat = mysql_query($poziv);

while($ispis = mysql_fetch_array($rezultat)) {
	$ispisati_liniju[] = $ispis;
}

$redovi = mysql_numrows($rezultat);


$poziv3="SELECT * FROM polasci_tramvaji WHERE ID=7";
$rezultat3=mysql_query($poziv3);
$ispis3=mysql_fetch_array($rezultat3);
$poziv4="SELECT * FROM polasci_tramvaji WHERE ID=9";
$rezultat4=mysql_query($poziv4);
$ispis4=mysql_fetch_array($rezultat4);
$poziv5="SELECT * FROM polasci_tramvaji WHERE ID=11";
$rezultat5=mysql_query($poziv5);
$ispis5=mysql_fetch_array($rezultat5);
$poziv6="SELECT * FROM polasci_tramvaji WHERE ID=8";
$rezultat6=mysql_query($poziv6);
$ispis6=mysql_fetch_array($rezultat6);
$poziv7="SELECT * FROM polasci_tramvaji WHERE ID=10";
$rezultat7=mysql_query($poziv7);
$ispis7=mysql_fetch_array($rezultat7);
$poziv8="SELECT * FROM polasci_tramvaji WHERE ID=12";
$rezultat8=mysql_query($poziv8);
$ispis8=mysql_fetch_array($rezultat8);



echo "<h2>Линија " . $_REQUEST['broj'] . "</h2>";
echo "<h3>" . $ispisati_liniju['Trasa'] . "</h3>";


?>
<table class="stajalista">
	<tr>
		<th>Смер</th>
		<th>Улице</th>
		<th>Стајалишта</th>
	</tr>
	
<?php //parametri prvog poziva

foreach($ispisati_liniju as $linija) {
?>
<tr>
	<td><?php echo $linija['Smer']; ?></td>
	<td><?php echo $linija['Ulice']; ?></td>
	<td class="smalltext"><?php echo $linija['Stajalista']; ?></td>
</tr>
<?php 
}
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
