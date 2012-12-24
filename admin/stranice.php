<?php
include_once("inc/funkcije.php");

$isAdmin = false;
$_GET['korisnik_id'] = null;

$isAdmin = true;
$_GET['is_admin'] = $isAdmin ? '1' : '0';

