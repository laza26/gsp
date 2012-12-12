  <!-- Begin Content Column -->
  <div id="content_pr">
<?php
    include 'headlines.php';
?>
  </div>
  <!-- End Content Column -->
  
  <!-- Begin Right Column -->
  <div id="rightcolumn_pr">
<?php
error_reporting (E_ALL ^ E_NOTICE);
 
	if ($_REQUEST ['naslov']=='1'){
		echo "<h3>".$ispis11['Naziv']."</h3>";
		echo "<p>".$ispis11['Sadrzaj']."</p>";
	}
		else if ($_REQUEST ['naslov']=='2'){
			echo "<h3>".$ispis12['Naziv']."</h3>";
			echo "<p>".$ispis12['Sadrzaj']."</p>";}
		
		else if ($_REQUEST ['naslov']=='3'){
			echo "<h3>".$ispis13['Naziv']."</h3>";
			echo "<p>".$ispis13['Sadrzaj']."</p>";}
		
		else if ($_REQUEST ['naslov']=='4'){
			echo "<h3>".$ispis14['Naziv']."</h3>";
			echo "<p>".$ispis14['Sadrzaj']."</p>";}
		
		else echo "<h3>".$ispis11['Naziv']."</h3><p>".$ispis11['Sadrzaj']."</p>";	
?>	
  </div>
  <!-- End Right Column -->
