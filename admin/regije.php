<?

include_once("inc/funkcije.php");	

function unos_regija(){
	echo '<div align="left" style="margin:0 0 20px 10px;">Unesite novu regiju:</div>';
 	echo '<form name="forma" action="admin.php?s=regije&a=unos&save=da" method="post">';
		echo '<table class="lokacije_new">';
			echo '<tr><td width="100" align="left"><b>Unesite naziv: </b></td>';
			echo '<td align="left" width="440"><input type="text" name="rime" class="txtbox" style="width:150px;"></td></tr>';
			
			echo '<tr><td align="left"><b>Unesite URL (Veoma bitno polje! Najbolje je pratiti postojeci patern.): </b></td>';
			echo '<td align="left"><input type="text" name="url" class="txtbox" style="width:150px;" value="'.$url.'"></td></tr>';
			
			echo '<tr><td></td><td align="left"><input type="submit" name="save" value="Sa&#269;uvaj" class="btn"></td></tr>';
			echo '</table>';
	echo '</form>';
}

function unos_regija_save(){
	$ime = $_POST["rime"];
	$url = $_POST["url"];
	$url = strtolower($_POST["url"]);
	$url = str_replace(array(' ', '_', '--'), array('-', '-', '-'), $url);
	
	$save= $_GET["save"];
	$db=konekcija();
	$sql="insert into regije(naziv, url) values ('".$ime."', '".$url."')";
	if($ime!=''){ 		
 		$rezultat = mysql_query($sql, $db);	 
 		echo '<center><b>Lokacija je sa&#269;uvana u bazi podataka !</b></center>';
 		echo '<meta http-equiv="refresh" content="2;url=admin.php?s=regije">';	
 	}
	elseif (($ime=='') && ($save=='da')){
		echo '<center><b>GRE&Scaron;KA: Niste popunili sve podatke u formularu!</b></center>';
 		echo '<meta http-equiv="refresh" content="2;url=admin.php?s=regije&a=unos">';	
	}
}
function prikaz_regija(){
	$db=konekcija();				
    $sql="SELECT rid, naziv, url FROM regije ORDER BY naziv ASC";
    $rezultat = mysql_query($sql, $db);
	echo '<div align="left" style="margin:0 0 10px 10px;"> <a href="admin.php?s=regije&a=unos"><img src="images/add.png" border="0"><b>Unos nove regije</b></a></div>';
    echo '<table class="lokacije" cellspacing="0" cellpadding="2">';
	echo '<tr style="background-color:#333;color:#ffffff;height:20px;">
			<td width="15"><b>R.Br</b></td>
			<td width="415" align="left"><b>Naziv</b></td>
			<td width="415" align="left"><b>URL</b></td>
			<td width="80" align="center"><b>A&#382;uriranje</b></td><td width="30" align="center"><b>Brisanje</b></td></tr>';
    $i=1;
	while($red = mysql_fetch_array($rezultat)){
		echo '<tr ><td align="center" style="border-top:1px solid #333;">'.$i.'</td>
				<td style="border-top:1px solid #333;text-align:left;">'.$red["naziv"].'</td>
				<td style="border-top:1px solid #333;text-align:left;">'.$red["url"].'</td>
				<td style="border-top:1px solid #333;" align="center"><a href="admin.php?s=regije&a=edit&rid='.$red["rid"].'"><img src="images/edit.png" border="0"></a></td><td style="border-top:1px solid #333;" align="center"><a href="admin.php?s=regije&a=delete&rid='.$red["rid"].'"><img src="images/delete.png"  border="0" onClick="return brisanje();"></a></td></tr>';
		$i=$i+1;
	}
	echo '</table>';
}
function brisanje_regija($rid){
	$rid=$_GET["rid"];
	$db=konekcija();				
    if($rid){
		$sql="DELETE FROM regije WHERE rid=".$rid." limit 1";
 		$rezultat = mysql_query($sql, $db);
 		echo '<center><b>Regija je izbrisana iz baze podataka!</b></center>';
 		echo '<meta http-equiv="refresh" content="2;url=admin.php?s=regije">';
    }	
 }
function edit_regija(){
	$db=konekcija();
	$rid=$_GET["rid"];
	$sql="SELECT rid, naziv, url FROM regije WHERE rid=".$rid;
	$rezultat = mysql_query($sql, $db);	
	echo '<div align="left" style="margin:0 0 20px 10px;">A&#382;uriranje regije:</div>';
 	echo '<form name="forma" action="admin.php?s=regije&rid='.$rid.'&a=edit&save=da" method="post">';
	while($red = mysql_fetch_array($rezultat)){
			$naziv = $red["naziv"];
			$url = $red["url"];
			
			echo '<table class="lokacije_new">';
			echo '<tr><td width="100" align="left"><b>Unesite naziv: </b></td>';
			echo '<td align="left" width="440"><input type="text" name="rime" class="txtbox" style="width:150px;" value="'.$naziv.'"></td></tr>';
			echo '<tr><td width="100" align="left"><b>Unesite URL (Veoma bitno polje!): </b></td>';
			echo '<td align="left" width="440"><input type="text" name="url" class="txtbox" style="width:150px;" value="'.$url.'"></td></tr>';
			echo '<tr><td></td><td align="left"><input type="submit" name="save" value="Sa&#269;uvaj" class="btn"></td></tr>';
			echo '</table>';
	}	
 	echo '</form>';
}
function edit_regija_save(){
	$db = konekcija();
	$rid = $_GET["rid"];
	$ime = $_POST["rime"];
	$url = strtolower($_POST["url"]);
	$url = str_replace(array(' ', '_', '--'), array('-', '-', '-'), $url);
	
	$save = $_GET["save"];
	$sql = "UPDATE regije SET naziv='" . $ime . "', url='" . $url . "' WHERE rid=".$rid;
	if(($rid!='') && ($ime!='')){ 		
 		$rezultat = mysql_query($sql, $db);	 
 		echo '<center><b>Regija je sa&#269;uvana u bazi podataka !</b></center>';
 		echo '<meta http-equiv="refresh" content="2;url=admin.php?s=regije">';	
 	}
	elseif(($ime=='') && ($save=='da')){
		echo '<center><b>GRE&Scaron;KA: Niste popunili sve podatke u formularu!</b></center>';
 		echo '<meta http-equiv="refresh" content="2;url=admin.php?s=regije&rid='.$rid.'&a=edit">';	
	}
}
$a=$_GET["a"];
$save=$_GET["save"];
if(($a=="unos") && (!$save)){
	unos_regija();
}
if($a=="delete"){
	brisanje_regija($lid);
}
if(($a=="edit") && (!$save)){
	edit_regija($lid);
}
if(!$a){
	prikaz_regija();
}

if(($a=="unos") && ($save="da")){
	unos_regija_save();
}

if(($a=="edit") && ($save="da")){
	edit_regija_save();
}
?>
