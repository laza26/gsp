<?php
 	include 'baza.php';
	include 'config.php';
	
	function lokacija($kontakt = '') {
		$db = konekcija();
		$sql = "SELECT COUNT(l.lid) as clid, l.lid, l.naziv, r.naziv as regija
				FROM lokacije l
				INNER JOIN nekretnine n ON n.lid=l.lid
				INNER JOIN regije r ON r.rid=l.rid
				WHERE r.rid=l.rid
				GROUP BY l.lid
				ORDER BY clid DESC";
		$rezultat = mysql_query($sql,$db);
		
		if(empty($kontakt)) echo '<select name="lokacija" id="lokacija" class="pretraga_select">\n';
		else echo '<select name="kontakt[Lokacija]" style="width: 300px;">';
		
		echo '<option value="" selected="selected">Prikaži sve</option>\n';	
		while($red = mysql_fetch_array($rezultat)){
			$naziv = $red["naziv"];
			$lid = $red["lid"];
			$ostatak = $red['clid'] % 10;
			$nekretnine = 'nekretnine';
			if(in_array($ostatak, Array(0, 1, 5, 6, 7, 8, 9))) $nekretnine = 'nekretnina';
			echo '<option value="' . $lid . '">'.$naziv.', ' . $red['regija'] . ' (' . $red['clid'] . ' ' . $nekretnine . ')</option>\n';
		}
 		echo '</select>';
	}
	
	function vrsta($kontakt = ''){
		$db=konekcija();
		$sql="select * from vrstanekretnine order by vnid";
		$rezultat=mysql_query($sql,$db);
		
		if(empty($kontakt)) echo '<select name="vrsta" id="vrsta" class="pretraga_select">';
		else echo '<select name="kontakt[Vrsta]" style="width: 300px;">';
		
		echo '<option value="" selected="selected">Prikaži sve</option>\n';	
		while($red = mysql_fetch_array($rezultat)){
			$vnekretnine=$red["vnekretnine"];
			$sid=$red["vnid"];
			echo "<option value='".$sid."'>".$vnekretnine."</option>\n";	
		}
 		echo '</select>';
	}
	function struktura($kontakt = ''){
		$db=konekcija();
		$sql="select distinct sobe from nekretnine where sobe<>'' order by nid";
		$rezultat=mysql_query($sql,$db);
		
		if(empty($kontakt)) echo '<select name="struktura" id="struktura" class="pretraga_select">';
		else echo '<select name="kontakt[Struktura]" style="width: 300px;">';
		
		echo '<option value="" selected="selected">Prikaži sve</option>\n';	
		while($red = mysql_fetch_array($rezultat)){
			$sobe=$red["sobe"];
			$nid=$red["nid"];
			if($sobe!='-'){
			echo "<option value='".$sobe."'>".$sobe."</option>\n";	
				}
		}
 		echo '</select>';
	}
	
	function povrsina($sta, $kontakt = ''){
		if(empty($kontakt)) echo '<select name="p'.$sta.'" class="pretraga_select1">';
		else echo '<select name="kontakt[Kvadratura ' . $sta . ']" style="width: 145px;">';
		
		echo '<option value="" selected="selected">'.$sta.'</option>';
		$j=0;
		for($i=0;$i<=40;$i++){
			echo '<option value="'.$j.'">'.$j.'</option>';
			$j=$j+25;
		}
		echo '</select>';
	}
	
	function novosti(){
	 	$db = konekcijaNovosti();
	 	
	 	$sql = 'SELECT post_title, post_content, post_date, guid FROM wp_posts WHERE post_status="publish" ORDER BY post_date DESC LIMIT 0,2';
	 	$rezultat = mysql_query($sql, $db);
	 	
	 	echo '<table class="tbl_novosti" cellpadding="0" cellspacing="1">';
	 	echo '<tr><td class="novosti_naslov" height="12px"><div style="margin-left: 15px;">Novosti</div></td></tr>';
		while($red = mysql_fetch_array($rezultat)){
			echo '<tr><td height="12px"><div style="margin:0px 5px 0px 5px"><a href="' . $red['guid'] . '"><b>' . $red["post_title"] . '</b></a></div></td></tr>';
			echo '<tr><td style="font-size:9px;" height="12px"><div style="margin:0px 5px 0px 5px">' . $red["post_date"] . '</div></td></tr>';
			echo '<tr><td><div style="margin:0px 5px 0px 5px; text-align:justify">' . substr(strip_tags($red["post_content"]), 0, 500) . '... <br /><br />
				<a href="' . $red['guid'] . '">Pročitajte ceo tekst</a><br /><br /></div></td></tr>';
		}
		
		echo '<tr><td><div style="margin:0px 5px 0px 5px; text-align:justify"><br /><a href="/novosti"><strong>Pročitajte vesti za nekretnine</strong></a><br /><br /></td></tr>';
		echo '</table>';
	}
	
	function set_slika()
	{
		$db = konekcija();
	 	
	 	$sql = 'UPDATE nekretnine SET ima_sliku=1 WHERE slika1<>""';
	 	$rezultat = mysql_query($sql, $db);
	}
?>