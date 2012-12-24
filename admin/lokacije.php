<?php

include_once("inc/funkcije.php");	

function unos_lokacija(){
	$db=konekcija();
	$sql="select * from regije order by naziv";
 	$rezultat = mysql_query($sql, $db);
	echo '<div align="left" style="margin:0 0 20px 10px;">Unesite novu lokaciju:</div>';
 	echo '<form name="forma" action="admin.php?s=lokacije&a=unos&save=da" method="post">';
		echo '<table class="lokacije_new">';
			echo '<tr><td width="100" align="left"><b>Izaberite regiju: </b></td><td width="440" align="left">';
				echo '<select name="regija" id="regija" class="regija_select">';
				echo '<option value="0" selected="selected">Izaberite regiju</option>';	
				while($red = mysql_fetch_array($rezultat)){
					$naziv=$red["naziv"];
					$rid=$red["rid"];
					echo "<option value='".$rid."'>".$naziv."</option>";	
				}
 				echo '</select>';
			echo '</td></tr>';
			
			echo '<tr><td align="left"><b>Unesite naziv: </b></td>';
			echo '<td align="left"><input type="text" name="ime" class="txtbox" style="width:150px;"></td></tr>';
			echo '<tr><td></td><td align="left"><input type="submit" name="save" value="Sa&#269;uvaj" class="btn"></td></tr>';
			echo '</table>';
	echo '</form>';
}

function unos_lokacija_save(){
	$db=konekcija();
	$rid=$_POST["regija"];
	$ime=$_POST["ime"];
	$sql="insert into lokacije(naziv,rid) values ('".$ime."',".$rid.")";
	if(($rid!='0') && ($ime!='')){ 		
 		$rezultat = mysql_query($sql, $db);	 
 		echo '<center><b>Lokacija je sa&#269;uvana u bazi podataka !</b></center>';
 		echo '<meta http-equiv="refresh" content="2;url=admin.php?s=lokacije">';	
 	}
	elseif ($rid!=''){
		echo '<center><b>GRE&Scaron;KA: Niste popunili sve podatke u formularu!</b></center>';
 		echo '<meta http-equiv="refresh" content="2;url=admin.php?s=lokacije&a=unos">';	
	}
}
function prikaz_lokacija(){
	$db=konekcija();				
    $sql="select l.lid as lid, l.naziv as naziv, r.naziv as regija from lokacije l, regije r where r.rid=l.rid order by lid, naziv asc";
    $rezultat = mysql_query($sql, $db);
	echo '<div align="left" style="margin:0 0 10px 10px;"> <a href="admin.php?s=lokacije&a=unos"><img src="images/add.png" border="0"><b>Unos nove lokacije</b></a></div>';
    echo '<table class="lokacije" cellspacing="0" cellpadding="2">';
	echo '<tr style="background-color:#333;color:#ffffff;height:20px;"><td width="15"><b>R.Br</b></td><td width="165" align="left"><b>Naziv</b></td><td width="250" ><b>Regija</b></td><td width="80" align="center"><b>A&#382;uriranje</b></td><td width="30" align="center"><b>Brisanje</b></td></tr>';
    $i=1;
	while($red = mysql_fetch_array($rezultat)){
		echo '<tr ><td align="center" style="border-top:1px solid #333;">'.$i.'</td><td style="border-top:1px solid #333;text-align:left;">'.$red["naziv"].'</td><td style="border-top:1px solid #333;">'.$red["regija"].'</td><td style="border-top:1px solid #333;" align="center"><a href="admin.php?s=lokacije&a=edit&lid='.$red["lid"].'"><img src="images/edit.png" border="0"></a></td><td style="border-top:1px solid #333;" align="center"><a href="admin.php?s=lokacije&a=delete&lid='.$red["lid"].'"><img src="images/delete.png"  border="0" onClick="return brisanje();"></a></td></tr>';
		$i=$i+1;
	}
	echo '</table>';
}
function brisanje_lokacija($lid){
	$lid=$_GET["lid"];
	$db=konekcija();				
    if($lid){
		$sql="delete from lokacije where lid=".$lid." limit 1";
 		$rezultat = mysql_query($sql, $db);
 		echo '<center><b>Lokacija je izbrisana iz baze podataka!</b></center>';
 		echo '<meta http-equiv="refresh" content="2;url=admin.php?s=lokacije">';
    }	
 }
function edit_lokacija(){
	$db=konekcija();
	$lid=$_GET["lid"];
	$sql="select l.lid as lid, r.rid, l.naziv as naziv from lokacije l, regije r where r.rid=l.rid and lid=".$lid;
	$sql1="select rid, naziv as regija from regije";
	$rezultat = mysql_query($sql, $db);
	$rezultat1 = mysql_query($sql1, $db);
	echo '<div align="left" style="margin:0 0 20px 10px;">A&#382;uriranje lokacije:</div>';
 	echo '<form name="forma" action="admin.php?s=lokacije&lid='.$lid.'&a=edit&save=da" method="post">';
		echo '<table class="lokacije_new">';
			echo '<tr><td width="100" align="left"><b>Izaberite regiju: </b></td><td width="440" align="left">';
				echo '<select name="regija" id="regija" class="regija_select">';
				echo '<option value="0">Izaberite regiju</option>';	
				while($red = mysql_fetch_array($rezultat1)){
					$regija=$red["regija"];
					$rid=$red["rid"];
					echo "<option value='".$rid."'>".$regija."</option>";
				}
				while($red = mysql_fetch_array($rezultat)){
					$naziv=$red["naziv"];
					$lid=$red["lid"];						
				}
 				echo '</select>';
			echo '</td></tr>';
			
			echo '<tr><td align="left"><b>Unesite naziv: </b></td>';
			echo '<td align="left"><input type="text" name="ime" class="txtbox" style="width:150px;" value="'.$naziv.'"></td></tr>';
			
			echo '<tr><td></td><td align="left"><input type="submit" name="save" value="Sa&#269;uvaj" class="btn"></td></tr>';
			echo '</table>';
	echo '</form>';
}
function edit_lokacija_save(){
	$db=konekcija();
	$rid=$_POST["regija"];
	$ime=$_POST["ime"];
	$lid=$_GET["lid"];
	$sql="update lokacije set naziv='".$ime."', rid=".$rid." where lid=".$lid;
	if(($rid!='0') && ($ime!='')){ 		
 		$rezultat = mysql_query($sql, $db);	 
 		echo '<center><b>Lokacija je sa&#269;uvana u bazi podataka !</b></center>';
 		echo '<meta http-equiv="refresh" content="2;url=admin.php?s=lokacije">';	
 	}
	elseif ($rid!=''){
		echo '<center><b>GRE&Scaron;KA: Niste popunili sve podatke u formularu!</b></center>';
 		echo '<meta http-equiv="refresh" content="2;url=admin.php?s=lokacije&lid='.$lid.'&a=edit">';	
	}
}
$a=$_GET["a"];
$save=$_GET["save"];
if(($a=="unos") && (!$save)){
	unos_lokacija();
}
if($a=="delete"){
	brisanje_lokacija($lid);
}
if(($a=="edit") && (!$save)){
	edit_lokacija($lid);
}
if(!$a){
	prikaz_lokacija();
}

if(($a=="unos") && ($save="da")){
	unos_lokacija_save();
}

if(($a=="edit") && ($save="da")){
	edit_lokacija_save();
}
?>
