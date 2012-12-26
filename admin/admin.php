<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:index.php");
    die;
}

$isAdmin = true;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Administracija sajta</title>
        <link href="css/admin.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="js/skripte.js"></script>
    </head>

    <?php
    include_once("inc/funkcije.php");
    ?>
    <body>
        <div id="kontejner">
            <table width="780" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #48307c;	">
                <tr>
                    <td class="header" width="200" align="left"><span style="margin-left:10px;">GSP</span></td>
                    <td class="header" width="580" align="right" valign="bottom"><div style="margin:0 10px 5px 0;"><a href="?s=logout">Izlaz iz sistema</a></div></td>
                </tr>
                <tr>
                    <td valign="top" class="meni">
                        <table width="150" style="margin:10px 0 10px 10px;">
                            <tr>
                                <td>
                                    <a href="?s=stranice">Lista stranica</a><br/>
                                    <a href="?s=dodaj_stranicu">Dodaj stranicu</a>
                                </td>
                            </tr>
                        </table></td>
                    <td class="bodi" align="center"><div style="margin:10px 10px 10px 10px; width:560px;"><?php
                            if (empty($_GET['s'])) {
                                $_GET['s'] = "stranice";
                            }

                            if (in_array($_GET['s'], array('stranice', 'dodaj_stranicu', 'logout', 'obrisi_stranicu'))) {
                                $fp = is_file($_GET['s'] . ".php");
                                $fp = preg_replace('|\W|', '', $fp);

                                if ($fp) {
                                    if (!$isAdmin && (!in_array($_GET['s'], array('stranice', 'dodaj_stranicu', 'logout', 'obrisi_stranicu'))))
                                        include("greska.php");
                                    else
                                        include($_GET['s'] . ".php");
                                } else
                                    include("greska.php");
                            } else
                                include("greska.php");
                            ?>
                        </div></td>
                </tr>
            </table>
        </div>
    </body>
</html>
