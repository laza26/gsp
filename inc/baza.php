<?php 

function konekcija() {
    //mysql podaci
    $dbhostname = 'localhost';
    $dbname = 'gsp';
    $dbusername = 'root';
    $dbpassword = '';
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
