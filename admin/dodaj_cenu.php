<?php 
    $id = "";
    
    if(!empty($_POST) && empty($_POST['id'])) {
        //kreiranje nove cene
        
        $sql = 'INSERT INTO `pojedinacne_karte` (`Kategorija`, `Vrsta_karte`, `Zona`, `Cena_sa_PDVom`) VALUES ("' . $_POST['Kategorija'] . '", "' . $_POST['Vrsta'] . '", "' . $_POST['Zona'] . '", "' . $_POST['Cena_sa_PDVom'] . '")';
        $db = konekcija();
        mysql_query($sql);
        
        echo 'Karta je uspešno dodata!';
    }
    
    if(!empty($_POST) && !empty($_POST['id'])) {
        //editovanje postojece stranice
        
        $id = $_POST['id'];
        
        $sql = 'UPDATE `pojedinacne_karte` SET `Kategorija`="' . $_POST['Kategorija'] . '", `Vrsta_karte`="' . $_POST['Vrsta'] . '", Zona="' . $_POST['Zona'] . '", `Cena_sa_PDVom`="' . $_POST['Cena_sa_PDVom'] . '" WHERE ID=' . $id;
        konekcija();
        mysql_query($sql);
        
        echo 'Izmene su uspešno sačuvane!';
    }
    
    if(!empty($_REQUEST['id'])) {
        //dohvatanje podataka
        $id = $_REQUEST['id'];
        
        konekcija();
        $sql = "SELECT `Kategorija`, `Vrsta_karte`, `Zona`, `Cena_sa_PDVom` FROM `pojedinacne_karte` WHERE ID=" . $id;
        $result = mysql_query($sql);
        
        while ($row = mysql_fetch_array($result)) {
            $Kategorija = stripslashes($row['Kategorija']);
            $Vrsta = stripslashes($row['Vrsta_karte']);
	    $Zona = stripslashes($row['Zona']);
            $Cena = stripslashes($row['Cena_sa_PDVom']);
        }
    }
?>
<form action="" method="post">
    <dl class="forma">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <dt>Kategorija:</dt>
        <dd><input type="text" name="Kategorija" class="polje" value="<?php echo $Kategorija; ?>"></dd>
	
	<dt>Vrsta:</dt>
        <dd><input type="text" name="Vrsta" class="polje" value="<?php echo $Vrsta; ?>"></dd>

	<dt>Zona:</dt>
        <dd><input type="text" name="Zona" class="polje" value="<?php echo $Zona; ?>"></dd>

	<dt>Cena sa PDV-om:</dt>
        <dd><input type="text" name="Cena_sa_PDVom" class="polje" value="<?php echo $Cena; ?>"></dd>
	
        <dd><input type="submit" value="Sačuvaj" class="dugme"></dd>
    </dl>
</form>
