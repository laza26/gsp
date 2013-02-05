<?php

function konekcija() {
    //mysql podaci
    $dbhostname = 'mysql1.000webhost.com';
    $dbname = 'a3499847_gsp';
    $dbusername = 'a3499847_admin';
    $dbpassword = 'admin12345';
    $connect = mysql_connect($dbhostname, $dbusername, $dbpassword);
    mysql_select_db($dbname) or die("Ne mogu se konektovati na bazu zbog: " . mysql_error());
    mysql_query("SET NAMES utf8");
    mysql_query("SET CHARACTER SET utf8");
    mysql_query("SET COLLATION_CONNECTION='utf8_general_ci'");
    return $connect;
}

//funkcija koja testira bazu
function testDB() {
    if (mysql_errno()) {
        die("MySQL greska: " . mysql_errno() . " " . mysql_error());
    }
}

function dohvati_stranicu($ID) {
    $sql = "SELECT * FROM `stranice` WHERE `ID` =" . $ID;
    $result = mysql_query($sql);

    if (!$result) return null;
    
    $row = mysql_fetch_row($result);
    
    return array(stripslashes($row[1]), stripslashes($row[2]));
}
