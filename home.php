<div id="content_home">
    <?php
    konekcija();
    $sql = "SELECT * FROM `stranice` WHERE ID=1";
    $result = mysql_query($sql);

    while ($ispis = mysql_fetch_array($result)) {
        echo $ispis['Tekst'];
    }
    ?>
    <ul class="sredina">
        <li>
            <a href="images/meni_naslovna/novi_autobusi.jpg" rel="lightbox[naslovna]" title="GSP"><img src="images/meni_naslovna/novi_autobusi_thumb.png" /></a>
        </li>
    </ul>    
</div>

<div id="sidebar_home">
    <?php
    include 'headlines.php';
    ?>
    <ul class="baneri">
        <li>
            <a href="http://www.bgsaobracaj.rs" target="_blank"><img src="images/banners/szs.jpg" /></a>
        </li>
        <li>
            <a href="http://www.uitp.org" target="_blank"><img src="images/banners/logo_UITP.gif" class="uitp"/></a>
        </li>
    </ul>
</div>