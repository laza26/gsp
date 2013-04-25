<?php
konekcija();
$sql="DELETE FROM `gsp`.`pojedinacne_karte` WHERE `pojedinacne_karte`.`ID` = " . $_GET['id'];
mysql_query($sql);
header("location:?s=cene");

