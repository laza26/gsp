<?php
include_once("inc/funkcije.php");

$isAdmin = false;
$_GET['korisnik_id'] = null;

$isAdmin = true;
$_GET['is_admin'] = $isAdmin ? '1' : '0';

konekcija();

$sql = "SELECT * FROM `pojedinacne_karte` ORDER BY `pojedinacne_karte`.`ID` DESC";
$result = mysql_query($sql);
	
?>

<h2>Cenovnik karata</h2>
<table width="530">
	<thead>
        <tr>
		<th>Kategorija</th>
		<th>Vrsta</th>
		<th>Zona</th>
		<th>Cena (sa PDV)</th>
		<th>Akcija</th>
	</tr>
	</thead>
	<tbody>

<?php 
	while ($r = mysql_fetch_array($result)) {
?>
	<tr>
		<td><?php echo $r['Kategorija']; ?></td>
		<td><?php echo $r['Vrsta_karte']; ?></td>
		<td><?php echo $r['Zona']; ?></td>
		<td><?php echo $r['Cena_sa_PDVom']; ?></td>
		<td><a href="?s=dodaj_cenu&id=<?php echo $r['ID']; ?>">Izmeni</a> <a href="?s=obrisi_cenu&id=<?php echo $r['ID']; ?>">Obrisi</a></td>
	</tr>
<?php 
	}
?>
	</tbody>
</table>
    <!-- Kraj tabele cenovnik -->
    </tbody>
</table>

-->
