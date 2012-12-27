<div id="content_home">
<?php
    konekcija();
    $sql="SELECT * FROM `stranice` WHERE ID=1";
    $result=mysql_query($sql);
    
    while($ispis=mysql_fetch_array($result)){
        echo $ispis['Tekst'];
    }
?>
</div>

<div id="sidebar_home">
<?php
    include 'headlines.php';
?>
<a href="http://www.bgsaobracaj.rs" border=0 target=blank><img src="images/banners/szs.jpg"></a></br>
<a href="http://www.uitp.org" border=0 target=blank><img src="images/banners/logo_UITP.gif" width="75px" height="58px"></a>
</div>