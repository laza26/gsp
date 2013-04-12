<?php

switch($_REQUEST['tip']) {
	case "autobuske":
		$tip = "autobuske";
		$tip_mnozina = "autobusi";
		break;
	case "tramvajske":
		$tip = "tramvajske";
		$tip_mnozina = "tramvaji";
		break;
	default:
		$tip = "trolejbuske";
		$tip_mnozina = "trolejbusi";
}

$poziv = "SELECT * FROM " . $tip . "_linije WHERE Broj_linije=" . $_REQUEST['broj'] . ' ORDER BY Smer';
$rezultat = mysql_query($poziv);

while($ispis = mysql_fetch_array($rezultat)) {
	$ispisati_liniju[] = $ispis;
}

$redovi = mysql_numrows($rezultat);


$polasci_sql = "SELECT * FROM gsp.polasci_" . $tip_mnozina . " where Broj_linije=" . $_REQUEST['broj'] . " ORDER BY Terminus, Dan;";
$polasci_rezultat = mysql_query($polasci_sql);

while($ispis = mysql_fetch_assoc($polasci_rezultat)) {
	$polasci_ispis[] = $ispis;
}


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
	<th colspan="9">Почетна станица: <?php echo $polasci_ispis[0]['Terminus'];?></th>
	</tr>
	<tr class="alt">
		<td colspan="3"></td>
		<td colspan="3"><b>Прва три:</b></td>
		<td colspan="3"><b>Последња три:</b></td>
	</tr>
	<tr>
		<td colspan="3"><b><?php echo $polasci_ispis[1]['Dan']; ?></b></td>
		<td><?php echo $polasci_ispis[1]['Prvi_polazak'];?></td>
		<td><?php echo $polasci_ispis[1]['Drugi_polazak'];?></td>
		<td><?php echo $polasci_ispis[1]['Treci_polazak'];?></td>
		<td><?php echo $polasci_ispis[1]['Treci_od_pozadi'];?></td>
		<td><?php echo $polasci_ispis[1]['Pretposlednji'];?></td>
		<td><?php echo $polasci_ispis[1]['Poslednji'];?></td>		
	</tr>
	<tr>
		<td colspan="3"><b><?php echo $polasci_ispis[2]['Dan']; ?></b></td>
		<td><?php echo $polasci_ispis[2]['Prvi_polazak'];?></td>
		<td><?php echo $polasci_ispis[2]['Drugi_polazak'];?></td>
		<td><?php echo $polasci_ispis[2]['Treci_polazak'];?></td>
		<td><?php echo $polasci_ispis[2]['Treci_od_pozadi'];?></td>
		<td><?php echo $polasci_ispis[2]['Pretposlednji'];?></td>
		<td><?php echo $polasci_ispis[2]['Poslednji'];?></td>		
	</tr>
		<tr>
		<td colspan="3"><b><?php echo $polasci_ispis[0]['Dan']; ?></b></td>
		<td><?php echo $polasci_ispis[0]['Prvi_polazak'];?></td>
		<td><?php echo $polasci_ispis[0]['Drugi_polazak'];?></td>
		<td><?php echo $polasci_ispis[0]['Treci_polazak'];?></td>
		<td><?php echo $polasci_ispis[0]['Treci_od_pozadi'];?></td>
		<td><?php echo $polasci_ispis[0]['Pretposlednji'];?></td>
		<td><?php echo $polasci_ispis[0]['Poslednji'];?></td>		
	</tr>
</table><br><br>
<!-- Kraj prve tabele polazaka -->

<!-- Tabela polazaka terminus 2-->
<table class="polasci">
    <tr>
        <th colspan="9">Почетна станица: <?php echo $polasci_ispis[3]['Terminus'];?></th>
    </tr>
	<tr class="alt">
		<td colspan="3"></td>
		<td colspan="3"><b>Прва три:</b></td>
		<td colspan="3"><b>Последња три:</b></td>
	</tr>
	<tr>
		<td colspan="3"><b><?php echo $polasci_ispis[4]['Dan']; ?></b></td>
		<td><?php echo $polasci_ispis[4]['Prvi_polazak'];?></td>
		<td><?php echo $polasci_ispis[4]['Drugi_polazak'];?></td>
		<td><?php echo $polasci_ispis[4]['Treci_polazak'];?></td>
		<td><?php echo $polasci_ispis[4]['Treci_od_pozadi'];?></td>
		<td><?php echo $polasci_ispis[4]['Pretposlednji'];?></td>
		<td><?php echo $polasci_ispis[4]['Poslednji'];?></td>		
	</tr>
	<tr>
		<td colspan="3"><b><?php echo $polasci_ispis[5]['Dan']; ?></b></td>
		<td><?php echo $polasci_ispis[5]['Prvi_polazak'];?></td>
		<td><?php echo $polasci_ispis[5]['Drugi_polazak'];?></td>
		<td><?php echo $polasci_ispis[5]['Treci_polazak'];?></td>
		<td><?php echo $polasci_ispis[5]['Treci_od_pozadi'];?></td>
		<td><?php echo $polasci_ispis[5]['Pretposlednji'];?></td>
		<td><?php echo $polasci_ispis[5]['Poslednji'];?></td>		
	</tr>
		<tr>
		<td colspan="3"><b><?php echo $polasci_ispis[3]['Dan']; ?></b></td>
		<td><?php echo $polasci_ispis[3]['Prvi_polazak'];?></td>
		<td><?php echo $polasci_ispis[3]['Drugi_polazak'];?></td>
		<td><?php echo $polasci_ispis[3]['Treci_polazak'];?></td>
		<td><?php echo $polasci_ispis[3]['Treci_od_pozadi'];?></td>
		<td><?php echo $polasci_ispis[3]['Pretposlednji'];?></td>
		<td><?php echo $polasci_ispis[3]['Poslednji'];?></td>		
	</tr>
</table></br>
<!-- Kraj druge tabele polazaka -->
