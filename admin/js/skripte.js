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