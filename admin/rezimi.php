<?php
include_once("inc/funkcije.php");

$isAdmin = false;
$_GET['korisnik_id'] = null;

$isAdmin = true;
$_GET['is_admin'] = $isAdmin ? '1' : '0';

konekcija();

$sql = "SELECT * FROM `promena_rezima` ORDER BY `promena_rezima`.`ID` DESC";
$result = mysql_query($sql);
?>

<table class="promena_rezima">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naslov</th>
            <th>Akcije</th>
        </tr>
    </thead>
    <tbody>       
<?php
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("<tr><td class='usko2'>%s</td><td>%s</td><td class='usko1'><a href='?s=dodaj_rezim&ID=%s'>Izmeni</a> <a href='?s=obrisi_rezim&ID=%s'>Obriši</a></td></tr>", $row[0], stripslashes($row[1]), $row[0], $row[0]);  
}
?>
    </tbody>
</table>
