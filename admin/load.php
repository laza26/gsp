<?php
	include_once('inc/funkcije.php');
	
	$db = konekcija();
	$sql = 'SELECT identifikator FROM nekretnine LIMIT 200, 200';
	$result = mysql_query($sql, $db);
	
	while($line = mysql_fetch_array($result)) {
		$url = 'http://interstan.com/prodaja-stanova/' . $line[0];
//		echo $url;
//		publish_on_twitter('Nova nekretnina:', $url);
//		sleep(100);
	}
	echo 'GOTOVO';
?>