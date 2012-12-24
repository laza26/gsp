function brisanje(){
  var pitanje = confirm ("Da li zelite da obrisete ovaj podatak iz baze?")
  if (pitanje==false){
 	 return false;
  }
  return true;
  
}

function provera(){
	var podatak=document.getElementById("sprat").value;   	
	if(isNaN(podatak)){
		podatak = "";
		alert("Sprat mora biti broj!!!");
		//podatak.focus();
		return false;	
	}else{
		return true;
	} 	 
}
