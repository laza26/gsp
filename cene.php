<?php
    konekcija();
    $sql = "SELECT * FROM `pojedinacne_karte`";
    $result = mysql_query($sql);
    $karte = array();

    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        $karte[$row[1]][] = $row;
    }
?>
<div id="uzi">
    <h1>Цене карата и претплатних легитимација</h1>
    <h2>Појединачне карте</h2>
    <h3>Категорија:</h3>		        
    <select onchange="prikazi_opcije(this.value)" class="cene">
        <option value='0'>Молимо одаберите опцију...</option>
        <?php
        foreach ($karte as $key => $val)
            echo "<option value='$key'>$key</option>";
        ?>
    </select> 
    <select onchange="" id="opcije" class="cene"></select>
    
    <div id="zona_i_cena"></div>
</div>

<script>
    karte=<?php echo json_encode($karte); ?>;
    function prikazi_opcije(vrednost){
        var prethodna_vrednost = "";
        
        jQuery('#opcije').children().remove();
        jQuery('#zona_i_cena').children().remove();
        
        jQuery('#opcije').append("<option value='0'>Молимо одаберите опцију...</option>");
        for(i = 0; i<karte[vrednost].length; i++) {
            if(prethodna_vrednost != karte[vrednost][i][2]) {
                prethodna_vrednost = karte[vrednost][i][2];
                jQuery('#opcije').attr('onchange', 'prikazi_cene("' + vrednost + '", this.value)');
                jQuery('#opcije').append("<option value='" + karte[vrednost][i][2] + "'>" + karte[vrednost][i][2] + "</option>")
            }
        }
    }
    function prikazi_cene(kljuc, vrednost){
        jQuery('#zona_i_cena').children().remove();
        for(i = 0; i<karte[kljuc].length; i++) {
            if(karte[kljuc][i][2] == vrednost) {
                jQuery('#zona_i_cena').append('<span><b>Зона: </b>' + karte[kljuc][i][3] + '<br/><b>Цена са ПДВ-ом: </b>' + karte[kljuc][i][4] + ' РСД</span><br/><br/>');
            }
        }
    }
</script>