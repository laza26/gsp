<script language="Javascript">
    function provera (){
        if (document.getElementById('ime').value.length<5) {alert("Ime mora imati najmanje 5 karaktera!"); return false;}
        else if (document.getElementById("mail").value.length<1) {alert("Morate uneti Vaš e-mail!");return false;}
        else if (document.getElementById("poruka").value.length<10) {alert("Dužina poruke mora biti veća od 10 karaktera.");return false;}
        else {alert("Poruka uspešno poslata!");}	
        return true;
    }
</script>

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
	<form id="forma" action="" method="post" onSubmit="return provera()">
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
</div> 
<?php
error_reporting (E_ALL ^ E_NOTICE);
if(!empty($_POST['mail'])){
        $ime=$_POST['ime'];
	$mail=$_POST['mail'];
	$poruka=$_POST['poruka'];
	
	$adresa_primaoca='uprava@gsp.net63.net';
	$subject='Poruka sa GSP sajta';
	$sadrzaj='Posiljalac: '.$ime. "\n". 'E mail posiljaoca: '.$mail. "\n". 'Poruka: '.$poruka."/n";
	$dolaznisajt='From:gsp.net63.net';
	
	mail($adresa_primaoca, $subject, $sadrzaj, $dolaznisajt);
}        
?>
   