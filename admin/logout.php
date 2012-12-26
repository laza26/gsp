<?php 
	
	$_SESSION["username"] = "";
	$_SESSION["identifier"] = "";
	
	if(empty ($_SESSION["username"])){
		echo '<b>Odjavili ste se uspe&#353;no!!!</b>';	
		echo '<meta http-equiv="refresh" content="2;url=index.php">';
	}
	
?>