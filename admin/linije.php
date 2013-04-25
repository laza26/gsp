<?php
include_once("inc/funkcije.php");

$isAdmin = false;
$_GET['korisnik_id'] = null;

$isAdmin = true;
$_GET['is_admin'] = $isAdmin ? '1' : '0';

konekcija();

//$sql = "SELECT * FROM `promena_rezima` ORDER BY `promena_rezima`.`ID` DESC";
//$result = mysql_query($sql);


$sve_linije = array(
	"tramvajske",
	"trolejbuske",
	"autobuske",
);

$ispis = array();
foreach($sve_linije as $tip) {
	$sql = "SELECT Broj_linije, Trasa FROM " . $tip . "_linije WHERE Smer='А' or Smer='A'";
//	echo $sql . '<hr/>';
	$rezultat = mysql_query($sql);
	while ($r = mysql_fetch_array($rezultat)) {
		$ispis[$tip][] = $r;
	}
}
?>

<h2>Tramvajske linije</h2>
<!-- Tabela tramvaji-->
<table width="530">
	<thead>
        <tr>
		<th>Broj linije</th>
		<th>Trasa</th>
		<th>Akcije</th>
	</tr>
	</thead>
	<tbody>

<?php 
	foreach($ispis['tramvajske'] as $i) {
		if(!$i) continue;
?>
	<tr>
		<td><?php echo $i['Broj_linije']; ?></td>
		<td><?php echo $i['Trasa']; ?></td>
		<td><a href="?s=dodaj_liniju&tip=tramvajske&broj=<?php echo $i['Broj_linije']; ?>">Izmeni</a> <a href="">Obrisi</a></td>
	</tr>
<?php 
	}
?>
	</tbody>
</table>
    <!-- Kraj tabele tramvaji -->

<h2>Trolejbuske linije</h2>

<!-- Tabela trolejbusi-->
<table width="530">
	<thead>
        <tr>
		<th>Broj linije</th>
		<th>Trasa</th>
		<th>Akcije</th>
	</tr>
	</thead>
	<tbody>
<?php 
	foreach($ispis['trolejbuske'] as $i) {
		if(!$i) continue;
?>
	<tr>
		<td><?php echo $i['Broj_linije']; ?></td>
		<td><?php echo $i['Trasa']; ?></td>
		<td><a href="?s=dodaj_liniju&tip=trolejbuske&broj=<?php echo $i['Broj_linije']; ?>">Izmeni</a> <a href="">Obrisi</a></td>
	</tr>
<?php 
	}
?>
	</tbody>
</table>
<!-- Kraj tabele trolejbusi -->

<h2>Autobuske linije</h2>
<!-- Tabela autobusi-->
<table width="530">
	<thead>
        <tr>
		<th>Broj linije</th>
		<th>Trasa</th>
		<th>Akcije</th>
	</tr>
	</thead>
	<tbody>
	<?php 
	foreach($ispis['autobuske'] as $i) {
		if(!$i) continue;
?>
	<tr>
		<td><?php echo $i['Broj_linije']; ?></td>
		<td><?php echo $i['Trasa']; ?></td>
		<td><a href="?s=dodaj_liniju&tip=autobuske&broj=<?php echo $i['Broj_linije']; ?>">Izmeni</a> <a href="">Obrisi</a></td>
	</tr>
<?php 
	}
?>
	</tbody>
</table>
<!-- Kraj tabele autobusi -->

<!-- 
<table class="promena_rezima">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naslov</th>
            <th>Akcije</th>
        </tr>
    </thead>
    <tbody>       
<?php /*
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("<tr><td class='usko2'>%s</td><td>%s</td><td class='usko1'><a href='?s=dodaj_rezim&ID=%s'>Izmeni</a> <a href='?s=obrisi_rezim&ID=%s'>Obriši</a></td></tr>", $row[0], stripslashes($row[1]), $row[0], $row[0]);  
} */
?>
    </tbody>
</table>

-->
