<?php
konekcija();
$sql="DELETE FROM `gsp`.`stranice` WHERE `stranice`.`ID` = " . $_GET['ID'];
mysql_query($sql);
header("location:?s=stranice");

