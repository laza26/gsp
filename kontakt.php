<div id="leftcolumn">
<?php
    konekcija();
    $sql="SELECT * FROM `stranice` WHERE ID=6";
    $result=mysql_query($sql);
    
    while($ispis=mysql_fetch_array($result)){
        echo $ispis['Tekst'];
    }
?>
</div>

<div id="rightcolumn">
<?php
$con = mysql_connect("localhost","root","");

if (!$con)
   {
    die('GRESKA PRILIKOM POVEZIVANJA NA BAZU: ' . mysql_error());	
	exit;
   }

mysql_query("SET NAMES 'UTF8'");
mysql_select_db("gsp", $con);
$poziv11="SELECT * FROM Pisite_nam WHERE ID=1";
$rezultat11=mysql_query($poziv11);

while($ispis11=mysql_fetch_array($rezultat11))
{
    echo "<h2>".$ispis11['Naziv']."</h2></br>";
    echo "<p>".$ispis11['Sadrzaj']."</p></br></br></br>";
}

mysql_close($con);
?>

<!-- Kontakt tabela -->
	<form id="forma" action="kontakt.php?p=10" method="post" onSubmit="return provera()">
            <dl class="kontac">
		<dt>Ваше име:</dt>
		<dd><input type="text" id="ime" class="kontacForma" name="ime"></dd>   
		<dt>E-mail:</dt>
		<dd><input type="text" id="mail" class="kontacForma" name="mail"></dd>		
		<dt>Ваша порука:</dt>
		<dd><textarea id="poruka" name="poruka"></textarea></dd>
		<dt><input type="reset" value="Обриши"/></dt>
		<dd><input type="submit" name="submit" value="Пошаљи"/></dd>
            </dl>
	</form>
<!-- Kraj kontakt tabele -->

<?php
error_reporting (E_ALL ^ E_NOTICE);
if($_REQUEST['p']=='10'){
	$ime=$_POST['ime'];
	$adresa=$_POST['mail'];
	$poruka=$_POST['poruka'];
	
	$adresa_primaoca='laza26@gmail.com';
	$subject='GSP Poruka sa sajta';
	$sadrzaj='Posiljalac: '.$ime. "\n". 'E mail posiljaoca: '.$adresa. "\n". 'Poruka: '.$poruka."/n";
	$dolaznisajt='From:gspbeograd.commuv.com';
	
	mail($adresaprimaoca, $subject, $sadrzaj, $dolaznisajt);
}
?>
</div>    