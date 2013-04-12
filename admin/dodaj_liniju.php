<?php 
    $id = $Naziv = $Sadrzaj = "";
    
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
    
    if(!empty($_POST)) {
        konekcija();
	
	//informacije o liniji
	if(!empty($_POST['broj'])) {
		$obrisi = "DELETE FROM `" . $tip . "_linije` WHERE Broj_linije='" . $_POST['broj'] . "';";
		mysql_query($obrisi);
	}

	foreach($_POST['smer'] as $key => $smer) {
		$sql = 'INSERT INTO `' . $tip . '_linije` (`Broj_linije`, `Trasa`, `Smer`, `Ulice`, `Stajalista`) VALUES ("' . $_POST['broj'] . '", "' . $_POST['trasa'][$key] . '", "' . $_POST['smer'][$key] . '", "' . $_POST['ulice'][$key] . '", "' . $_POST['stajalista'][$key] . '")';
		mysql_query($sql);
	}
	
	//termini polazaka
	if(!empty($_POST['broj'])) {
		$obrisi = "DELETE FROM `polasci_" . $tip_mnozina . "` WHERE Broj_linije='" . $_POST['broj'] . "';";
		mysql_query($obrisi);
	}
	
	foreach($_POST['dan'] as $key => $dan) {
		$sql = 'INSERT INTO `polasci_' . $tip_mnozina . '` (`Broj_linije`, `Dan`, `Terminus`, `Prvi_polazak`, `Drugi_polazak`, `Treci_polazak`, `Treci_od_pozadi`, `Pretposlednji`, `Poslednji`, `Interval`) VALUES ("' . $_POST['broj'] . '", "' . $_POST['dan'][$key] . '", "' . $_POST['pocetna'][($key < 3 ? 0 : 4)] . '", "' . $_POST['prvi_polazak'][$key] . '", "' . $_POST['drugi_polazak'][$key] . '",  "' . $_POST['treci_polazak'][$key] . '", "' . $_POST['treci_n_polazak'][$key] . '", "' . $_POST['drugi_n_polazak'][$key] . '", "' . $_POST['prvi_n_polazak'][$key] . '", 15)';
		mysql_query($sql);
	}
        
        echo 'Linija je uspešno snimljena!';
    }
    
    if(!empty($_REQUEST['broj'])) {
        //dohvatanje podataka
        $broj = $_REQUEST['broj'];
        
        konekcija();
	
	$poziv = "SELECT * FROM " . $tip . "_linije WHERE Broj_linije=" . $_REQUEST['broj'] . ' ORDER BY Smer';
	$rezultat = mysql_query($poziv);

	while($ispis = mysql_fetch_array($rezultat)) {
		$ispisati_liniju[] = $ispis;
	}
        
	$polasci_sql = "SELECT * FROM gsp.polasci_" . $tip_mnozina . " where Broj_linije=" . $_REQUEST['broj'] . " ORDER BY Terminus, Dan;";
	$polasci_rezultat = mysql_query($polasci_sql);

	while($ispis = mysql_fetch_assoc($polasci_rezultat)) {
		$polasci_ispis[] = $ispis;
	}
    } else {
	$ispisati_liniju[0] = $ispisati_liniju[1] = array('Smer' => '', 'Trasa' => '', 'Ulice' => '', 'Stajalista' => '');
    }
?>
<h2>Stajalista</h2>

<form action="" method="post">
	Broj linije: <input type="text" name="broj" value="<?php echo $broj; ?>" />
	<table class="stajalista">
	<?php
		$c = 0;
		foreach($ispisati_liniju as $linija) {
	?>
		<tr><td colspan="2"><h2>Smer <?php echo $c+1; ?></h2></td></tr>
		<tr>
			<td><input style="width:250px;text-align:center;" type="text" name="smer[<?php echo $c; ?>]" value="<?php echo $linija['Smer']; ?>" /></td>
			<td><input style="width:250px;" type="text" name="trasa[<?php echo $c; ?>]" value="<?php echo $linija['Trasa']; ?>" /></td>
		</tr><tr>
			<td><textarea style="width:250px;" rows="10" columns="20" name="ulice[<?php echo $c; ?>]"><?php echo $linija['Ulice']; ?></textarea></td>
			<td><textarea style="width:250px;" rows="10" columns="20" name="stajalista[<?php echo $c; ?>]"><?php echo $linija['Stajalista']; ?></textarea></td>
		</tr>
	<?php 
			$c++;
		}
	?>
	</table>
        <input type="submit" value="Sačuvaj" class="dugme">
	
	<h3>Polasci sa terminusa</h3>

	<!-- Tabela polazaka terminus 1-->
	<table class="polasci">
		<tr>
		<th colspan="9">Pocetna stanica: <input type="text" value="<?php echo $polasci_ispis[0]['Terminus'];?>" name="pocetna[0]" /></th>
		</tr>
		<tr class="alt">
			<td colspan="3">Dan:</td>
			<td colspan="3"><b>Prva tri:</b></td>
			<td colspan="3"><b>Poslednja tri:</b></td>
		</tr>
		<tr>
			<td colspan="3"><input type="text" name="dan[1]" value="<?php echo $polasci_ispis[1]['Dan']; ?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_polazak[1]" value="<?php echo $polasci_ispis[1]['Prvi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_polazak[1]" value="<?php echo $polasci_ispis[1]['Drugi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_polazak[1]" value="<?php echo $polasci_ispis[1]['Treci_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_n_polazak[1]" value="<?php echo $polasci_ispis[1]['Treci_od_pozadi'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_n_polazak[1]" value="<?php echo $polasci_ispis[1]['Pretposlednji'];?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_n_polazak[1]" value="<?php echo $polasci_ispis[1]['Poslednji'];?>" /></td>		
		</tr>
		<tr>
			<td colspan="3"><input type="text" name="dan[2]" value="<?php echo $polasci_ispis[2]['Dan']; ?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_polazak[2]" value="<?php echo $polasci_ispis[2]['Prvi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_polazak[2]" value="<?php echo $polasci_ispis[2]['Drugi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_polazak[2]" value="<?php echo $polasci_ispis[2]['Treci_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_n_polazak[2]" value="<?php echo $polasci_ispis[2]['Treci_od_pozadi'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_n_polazak[2]" value="<?php echo $polasci_ispis[2]['Pretposlednji'];?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_n_polazak[2]" value="<?php echo $polasci_ispis[2]['Poslednji'];?>" /></td>		
		</tr>
			<tr>
			<td colspan="3"><input type="text" name="dan[0]" value="<?php echo $polasci_ispis[0]['Dan']; ?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_polazak[0]" value="<?php echo $polasci_ispis[0]['Prvi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_polazak[0]" value="<?php echo $polasci_ispis[0]['Drugi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_polazak[0]" value="<?php echo $polasci_ispis[0]['Treci_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_n_polazak[0]" value="<?php echo $polasci_ispis[0]['Treci_od_pozadi'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_n_polazak[0]" value="<?php echo $polasci_ispis[0]['Pretposlednji'];?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_n_polazak[0]" value="<?php echo $polasci_ispis[0]['Poslednji'];?>" /></td>		
		</tr>
	</table><br><br>
	<!-- Kraj prve tabele polazaka -->

	<!-- Tabela polazaka terminus 2-->
	<table class="polasci">
		<tr>
		<th colspan="9">Pocetna stanica: <input type="text" value="<?php echo $polasci_ispis[4]['Terminus'];?>" name="pocetna[4]" /></th>
		</tr>
		<tr class="alt">
			<td colspan="3">Dan:</td>
			<td colspan="3"><b>Prva tri:</b></td>
			<td colspan="3"><b>Poslednja tri:</b></td>
		</tr>
		<tr>
			<td colspan="3"><input type="text" name="dan[4]" value="<?php echo $polasci_ispis[4]['Dan']; ?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_polazak[4]" value="<?php echo $polasci_ispis[4]['Prvi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_polazak[4]" value="<?php echo $polasci_ispis[4]['Drugi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_polazak[4]" value="<?php echo $polasci_ispis[4]['Treci_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_n_polazak[4]" value="<?php echo $polasci_ispis[4]['Treci_od_pozadi'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_n_polazak[4]" value="<?php echo $polasci_ispis[4]['Pretposlednji'];?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_n_polazak[4]" value="<?php echo $polasci_ispis[4]['Poslednji'];?>" /></td>		
		</tr>
		<tr>
			<td colspan="3"><input type="text" name="dan[5]" value="<?php echo $polasci_ispis[5]['Dan']; ?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_polazak[5]" value="<?php echo $polasci_ispis[5]['Prvi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_polazak[5]" value="<?php echo $polasci_ispis[5]['Drugi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_polazak[5]" value="<?php echo $polasci_ispis[5]['Treci_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_n_polazak[5]" value="<?php echo $polasci_ispis[5]['Treci_od_pozadi'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_n_polazak[5]" value="<?php echo $polasci_ispis[5]['Pretposlednji'];?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_n_polazak[5]" value="<?php echo $polasci_ispis[5]['Poslednji'];?>" /></td>		
		</tr>
			<tr>
			<td colspan="3"><input type="text" name="dan[3]" value="<?php echo $polasci_ispis[3]['Dan']; ?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_polazak[3]" value="<?php echo $polasci_ispis[3]['Prvi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_polazak[3]" value="<?php echo $polasci_ispis[3]['Drugi_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_polazak[3]" value="<?php echo $polasci_ispis[3]['Treci_polazak'];?>" /></td>
			<td><input type="text" style="width:35px;" name="treci_n_polazak[3]" value="<?php echo $polasci_ispis[3]['Treci_od_pozadi'];?>" /></td>
			<td><input type="text" style="width:35px;" name="drugi_n_polazak[3]" value="<?php echo $polasci_ispis[3]['Pretposlednji'];?>" /></td>
			<td><input type="text" style="width:35px;" name="prvi_n_polazak[3]" value="<?php echo $polasci_ispis[3]['Poslednji'];?>" /></td>		
		</tr>
	</table><br><br>
        <input type="submit" value="Sačuvaj" class="dugme">
</form>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
