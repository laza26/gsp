<?php 
    $id = $naslov = $tekst = "";
    
    if(!empty($_POST) && empty($_POST['id'])) {
        //kreiranje nove stranice
        $naslov = $_POST['naslov'];
        $tekst = $_POST['tekst'];
        
        $sql = 'INSERT INTO `stranice` (`Naslov`, `Tekst`) VALUES ("' . $naslov . '", "' . $tekst . '")';
        $db = konekcija();
        mysql_query($sql);
        
        echo 'Stranica je uspešno dodata!';
    }
    
    if(!empty($_POST) && !empty($_POST['id'])) {
        //editovanje postojece stranice
        $naslov = $_POST['naslov'];
        $tekst = $_POST['tekst'];
        $id = $_POST['id'];
        
        $sql = 'UPDATE `stranice` SET `Naslov`="' . $naslov . '", `Tekst`="' . $tekst . '" WHERE ID=' . $id;
        konekcija();
        mysql_query($sql);
        
        echo 'Izmene su uspešno sačuvane!';
    }
    
    if(!empty($_REQUEST['ID'])) {
        //dohvatanje podataka
        $id = $_REQUEST['ID'];
        
        konekcija();
        $sql = "SELECT Naslov, Tekst FROM stranice WHERE ID=" . $id;
        $result = mysql_query($sql);
        
        while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
            $naslov = $row[0];
            $tekst = $row[1];  
        }
    }
?>
<form action="" method="post">
    <dl class="forma">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <dt>Naslov:</dt>
        <dd><input type="text" name="naslov" class="polje" value="<?php echo $naslov; ?>"></dd>
        <dt>Tekst:</dt>
        <dd><textarea name="tekst"><?php echo $tekst; ?></textarea></dd>
        <dt><input type="submit" value="Pošalji"></dt>
        <dd><input type="reset" value="Obriši"></dd>
    </dl>
</form>