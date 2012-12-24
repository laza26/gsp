<?php 
	
	session_unregister("username");
	session_unregister("identifier");
	
	if(session_unregister("username")){
		echo '<b>Odjavili ste se uspe&#353;no!!!</b>';	
		echo '<meta http-equiv="refresh" content="2;url=index.php">';
	}
	
?>