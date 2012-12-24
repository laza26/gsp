<?php 

include '../inc/baza.php';

$db = konekcija();

$username = mysql_real_escape_string($_POST['username']);
$pass = mysql_real_escape_string($_POST['password']);
$password = md5($pass);

$sql = "SELECT * FROM korisnici WHERE username='$username' and password='$password'";
$rezultat = mysql_query($sql, $db);

$prodji = mysql_num_rows($rezultat);

$red = mysql_fetch_row($rezultat);

if ($prodji > 0) {
    session_start();

    $_SESSION['username'] = $username;
    $_SESSION['identifier'] = $red[0];

    header("location:admin.php");
} else {
    echo "<script> alert('   Nepostojece korisnicko ime i lozinka! ')</script>";
    echo '<meta http-equiv="refresh" content="0;url=index.php">';
}