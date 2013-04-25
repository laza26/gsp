<?php

$sve_linije = array(
	"tramvajske" => array(2, 3, 5, 6, 7),
	"trolejbuske" => array(19, 21, 22, 28, 29),
	"autobuske" => array(15, 16, 17, 18, 20),
);

foreach($sve_linije as $tip => $linije)
	foreach($linije as $br_linije) {
		$rezultat = mysql_query("SELECT Broj_linije, Trasa FROM " . $tip . "_linije WHERE Broj_linije='" . $br_linije . "' AND (Smer='А' OR Smer='A')");
		$ispis[$tip][] = mysql_fetch_array($rezultat);
	}

	echo "<h1>Списак дневних линија</h1>";
	echo "<h2>Трамвајске линије</h2>";
	
?>

<!-- Tabela tramvaji-->
<dl class="tramvaji"> 
	<dt class="zaglavlje1">Број линије</dt>
	<dd class="zaglavlje1">Траса</dd>

<?php 
	foreach($ispis['tramvajske'] as $i) {
		if(!$i) continue;
?>
	<dt><a href="?strana=linija&tip=tramvajske&broj=<?php echo $i['Broj_linije']; ?>"><?php echo $i['Broj_linije']; ?></a></dt>
	<dd><a href="?strana=linija&tip=tramvajske&broj=<?php echo $i['Broj_linije']; ?>"><?php echo $i['Trasa']; ?></a></dd>
<?php 
	}
?>
</dl>
    <!-- Kraj tabele tramvaji -->

<h2>Тролејбуске линије</h2>

<!-- Tabela trolejbusi-->
<dl class="trolejbusi">
	<dt class="zaglavlje2">Број линије</dt>
	<dd class="zaglavlje2">Траса</dd>
<?php 
	foreach($ispis['trolejbuske'] as $i) {
		if(!$i) continue;
?>
	<dt><a href="?strana=linija&tip=trolejbuske&broj=<?php echo $i['Broj_linije']; ?>"><?php echo $i['Broj_linije']; ?></a></dt>
	<dd><a href="?strana=linija&tip=trolejbuske&broj=<?php echo $i['Broj_linije']; ?>"><?php echo $i['Trasa']; ?></a></dd>
<?php 
	}
?>
</dl>
<!-- Kraj tabele trolejbusi -->

<h2>Аутобуске линије</h2>
<!-- Tabela autobusi-->
<dl class="autobusi">
	<dt class="zaglavlje3">Број линије</dt>
	<dd class="zaglavlje3">Траса</dd>
	<?php 
	foreach($ispis['autobuske'] as $i) {
		if(!$i) continue;
?>
	<dt><a href="?strana=linija&tip=autobuske&broj=<?php echo $i['Broj_linije']; ?>"><?php echo $i['Broj_linije']; ?></a></dt>
	<dd><a href="?strana=linija&tip=autobuske&broj=<?php echo $i['Broj_linije']; ?>"><?php echo $i['Trasa']; ?></a></dd>
<?php 
	}
?>
</dl>
<!-- Kraj tabele autobusi -->
