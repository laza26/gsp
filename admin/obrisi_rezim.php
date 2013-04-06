<?php
konekcija();
$sql="DELETE FROM `promena_rezima` WHERE `ID` = " . $_GET['ID'];
mysql_query($sql);
header("location:?s=rezimi");

