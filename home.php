<div id="content_home">
    <?php
    konekcija();
    $sql = "SELECT * FROM `stranice` WHERE ID=1";
    $result = mysql_query($sql);

    while ($ispis = mysql_fetch_array($result)) {
        echo $ispis['Tekst'];
    }
    ?>
    <div id="sredina">      
        <a href="images/meni_naslovna/novi_autobusi.jpg" rel="lightbox[naslovna]" title="GSP"><img src="images/meni_naslovna/novi_autobusi_thumb.png"/></a>
    </div>    
</div>

<div id="sidebar_home">
    <?php
    include 'headlines.php';
    ?>
        <ul class="baneri">
            <li>
                <a href="http://www.bgsaobracaj.rs" target="_blank"><img src="images/banners/szs.jpg" /></a>
            </li>
        </ul>  
</div>