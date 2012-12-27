<?php
    konekcija();
    $sql="SELECT * FROM `stranice` WHERE ID=5";
    $result=mysql_query($sql);
    
    while($ispis=mysql_fetch_array($result)){
        echo $ispis['Tekst'];
    }
?>