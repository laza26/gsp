<?php 
    $id = $Naziv = $Sadrzaj = "";
    
    if(!empty($_POST) && empty($_POST['id'])) {
        //kreiranje nove promena_rezima
        $Naziv = mysql_real_escape_string($_POST['Naziv']);
        $Sadrzaj = mysql_real_escape_string($_POST['Sadrzaj']);
        
        $sql = 'INSERT INTO `promena_rezima` (`Naziv`, `Sadrzaj`) VALUES ("' . $Naziv . '", "' . $Sadrzaj . '")';
        $db = konekcija();
        mysql_query($sql);
        
        echo 'Promena rezima je uspešno dodata!';
    }
    
    if(!empty($_POST) && !empty($_POST['id'])) {
        //editovanje postojece promena_rezima
        $Naziv = mysql_real_escape_string($_POST['Naziv']);
        $Sadrzaj = mysql_real_escape_string($_POST['Sadrzaj']);
        $id = $_POST['id'];
        
        $sql = 'UPDATE `promena_rezima` SET `Naziv`="' . $Naziv . '", `Sadrzaj`="' . $Sadrzaj . '" WHERE ID=' . $id;
        konekcija();
        mysql_query($sql);
        
        echo 'Izmene su uspešno sačuvane!';
    }
    
    if(!empty($_REQUEST['ID'])) {
        //dohvatanje podataka
        $id = $_REQUEST['ID'];
        
        konekcija();
        $sql = "SELECT Naziv, Sadrzaj FROM promena_rezima WHERE ID=" . $id;
        $result = mysql_query($sql);
        
        while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
            $Naziv = stripslashes($row[0]);
            $Sadrzaj = stripslashes($row[1]);  
        }
    }
?>
<form action="" method="post">
    <dl class="forma">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <dt>Naziv:</dt>
        <dd><input type="text" name="Naziv" class="polje" value="<?php echo $Naziv; ?>"></dd>
        <dt>Sadrzaj:</dt>
        <dd><textarea name="Sadrzaj" id="Sadrzaj"><?php echo $Sadrzaj; ?></textarea></dd>
        <dt></dt>
        <dd><input type="submit" value="Sačuvaj" class="dugme"></dd>
    </dl>
</form>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/tinymce/jscripts/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript">
        $(function() {
                $('textarea#Sadrzaj').tinymce({
                        // Location of TinyMCE script
                        script_url : '/js/tinymce/jscripts/tiny_mce/tiny_mce.js',

                        // General options
                        theme : "advanced",
                        plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

                        // Theme options
                        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
                        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,forecolor,backcolor",
                        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,media,advhr,|,fullscreen",
                        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
                        theme_advanced_toolbar_location : "top",
                        theme_advanced_toolbar_align : "left",
                        theme_advanced_statusbar_location : "bottom",
                        theme_advanced_resizing : true,

                        // Drop lists for link/image/media/template dialogs
                        template_external_list_url : "lists/template_list.js",
                        external_link_list_url : "lists/link_list.js",
                        external_image_list_url : "lists/image_list.js",
                        media_external_list_url : "lists/media_list.js",

                        // Replace values for the template plugin
                        template_replace_values : {
                                username : "Some User",
                                staffid : "991234"
                        }
                });
        });
</script>
