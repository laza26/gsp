<?php
	if(!in_array($_SESSION['username'], array('nebojsa', 'dejan'))) return ;
	
	include_once("inc/funkcije.php");
	$db = konekcija();
	
	if(!empty($_REQUEST['obrisati'])) {
		$sql = 'DELETE FROM sidebar WHERE id=' . $_REQUEST['obrisati'];
		mysql_query($sql, $db);
	}
	
	if(!empty($_POST['new_sidebar'])) {
		
		$target = $_SERVER['DOCUMENT_ROOT'] . '/sidebar/';
		$target = $target . basename( $_FILES['new_slika']['name']);
		$ok = 1;
		
		if(move_uploaded_file($_FILES['new_slika']['tmp_name'], $target)) {
			echo "Fajl " . basename($target) . " je postavljen na server.<br/>";
		} else {
			echo 'Postojao je problem kod postavljanja fajla ' . basename($target) . ' na server.<br />';
			$ok = 0;
		}
		 
		$sql = 'INSERT INTO sidebar (`slika`, `link`, `sort`) VALUES ("/sidebar/' . basename( $_FILES['new_slika']['name']) . '", "' . $_POST['new_link'] . '", "' . $_POST['new_sort'] . '")';
		if($ok == 1) mysql_query($sql, $db);
	}
	
	if(!empty($_POST['edit_sidebar'])) {
		foreach($_POST['slide'] as $key=>$value) {
			$sql = 'UPDATE sidebar SET `link`="' . $value['link'] . '", `sort`="' . $value['sort'] . '" WHERE `id`=' . $key;
			 mysql_query($sql, $db);
		}
	}
?>

<form action="" method="post" enctype="multipart/form-data">
<h2>Sidebar</h2>
<table class="lokacije tablesorter" id="moji-oglasi">
	<thead>
		<tr style="color: white;">
		    <th>Slika</th> 
		    <th>Link</th> 
		    <th>Sort.</th> 
			<th>Brisanje</th>
		</tr> 
	</thead>
	<tbody>
<?php
	$sql = "SELECT * FROM sidebar ORDER BY sort ASC";
 	$rezultat = mysql_query($sql, $db);
	
	while($red = mysql_fetch_array($rezultat)){
?>
	<tr>
		<td>
			<img src="<?php echo $red['slika']; ?>" width="160" height="78" />
		</td>
		<td>
			<input type="text" name="slide[<?php echo $red['id']; ?>][link]" value="<?php echo $red['link']; ?>" />
		</td>
		<td>
			<input type="text" name="slide[<?php echo $red['id']; ?>][sort]" value="<?php echo $red['sort']; ?>" />
		</td>
		<td align="center" valign="center">
			<a href="admin.php?s=sidebar&obrisati=<?php echo $red['id']; ?>">Obrisati</a>
		</td>
	</tr>
<?php
	}
?>
	</tbody>
</table>

<input type="submit" name="edit_sidebar" value="Snimi izmene" />

</form>

<script type="text/javascript"> 
	$(document).ready(function() {
		$("#moji-oglasi").tablesorter({
			widgets: ['zebra']
		});
	});
</script>

<form action="" method="post" enctype="multipart/form-data">
	<h2>Novi unos</h2>
	<table class="lokacije tablesorter">
		<tr>
			<td>Slika (300 x 313)</td>
			<td><input name="new_slika" type="file" /></td>
		</tr>
		<tr>
			<td>Link</td>
			<td><input name="new_link" type="text" /></td>
		</tr>
		<tr>
			<td>Sort</td>
			<td><input name="new_sort" type="text" value="0" /></td>
		</tr>
		<tr>
			<td></td>
			<td> <input type="submit" name="new_sidebar" value="Dodaj novi" /> </td>
		</tr>
	</table>
</form>