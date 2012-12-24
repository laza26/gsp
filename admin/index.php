<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ulogujte se</title>
</head>
<style type="text/css">
html, body, #kontejner {
	height:100%;
	margin: 0;
	padding: 0;
	border: none;
	text-align: center;
	font-size:12px;
}
#kontejner {
	margin: 0 auto;
	text-align: center;
	vertical-align: middle;
	width: 100%;
}
.login{
	width:400px;
	height:250px;
	border:1px solid #333;
	font-family:Tahoma,Verdana,Arial;
	
	color:#333;			    
}
.txtbox{
    border:1px solid #333;
	font-family:Tahoma,Verdana,Arial;
	
	color:#333;	
	background-color:#f8f8f8;
	text-indent:2px;
}
.btn{
    border:1px solid #333;
	font-family:Tahoma,Verdana,Arial;
	
	color:#333;	
	background-color:#f8f8f8;	
}

</style>

<script language="javascript">

function proveri(){
  if (document.forma.username.value == ""){
     window.alert (" Morate uneti korisniko ime !! ")
     document.forma.username.focus()
     return false;
  }
  if (document.forma.password.value == ""){
     window.alert (" Morate uneti lozinku !! ")
     document.forma.password.focus()
     return false;
  }  
  var prot = document.forma.username.value
  prot = prot.toUpperCase()
  var pat = /\bOR\b/
  var pat2 = /=/
    
  if (prot.search(pat) != -1 || prot.search(pat2) != -1) {
     window.alert (" Pogresan format korisnickog imena ili lozinke! ")
    // self.close()
     return false;
  }
prot=document.forma.password.value
prot = prot.toUpperCase()
  if (prot.search(pat) != -1 || prot.search(pat2) != -1) {
     window.alert (" Pogresan format korisnickog imena ili lozinke! ")
    // self.close()
     return false;
  }

  document.forma.submit();
}
</script>

<body>
<table id="kontejner">
      <tr>
        <td align="center">
            <table class="login">
               <tr>
                 <td width="100" rowspan="2" valign="top"><a href="../index.php"><img src="images/logo.gif" border="0" /></a></td>
                 <td width="300" align="center" height="90">Dobrodošli u administraciju Interstana.</td>
              </tr>
               <tr>
                 <td valign="top"><form name="forma" action="provera.php" method="post" >                
                   <table cellpadding="3" cellspacing="3" style="font-family:Tahoma,Verdana,Arial;color:#333;	">
                   <tr>
                     <td><strong>Korisničko ime:</strong></td>
                     <td><input type="text" name="username" id="username" class="txtbox" /></td>
                   </tr>
                   <tr>
                     <td><strong>Lozinka:</strong></td>
                     <td><input type="password" name="password" id="password" class="txtbox" /></td>
                   </tr>
                   <tr align="center">
                     <td colspan="2">
                         <br />
                         <input type="submit" name="prijavi" id="prijavi" value="Prijavi se" class="btn" onClick="return proveri();"/>
					 </td>
                   </tr>
                 </table> 
                 </form></td>
               </tr>
            </table>         
         </td>
      </tr>
   </table>
</body>
</html>
