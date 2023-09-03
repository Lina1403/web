document.getElementById("c").addEventListener("submit", function(e){
 
	var error_first;
    var error_mail;
    var error_adress;
	var error_pass;
    
	/*var inputs = this.getElementsByTagName("input");
 
	for (var i = 0; i < inputs.length; i++) {
		console.log(inputs[i]);
		if (!inputs[i].value) {
			erreur = "Please complete all fields! ";
		}
	}*/

	var name = document.getElementById("name");
	var mail = document.getElementById("email");
	var pass = document.getElementById("pass");
    var adress = document.getElementById("adresse");
    var num = /^[1-9]+$/;
	var maj = /^[A-Z]+$/;
	var min = /^[a-z]+$/;
     myregex = /^[A-Za-z]+$/;
     var reWhiteSpace = new RegExp("/^\s+$/");
     let regexx = new RegExp('[a-z0-9]+@gmail.com');
     let regexxx = new RegExp('[a-z0-9]+@yahoo.tn');
    
    if (!nomR.value) {
		error_first = "First Name Required!!";
	}
    else if (myregex.test(nomR.value)==false){
		error_first = "first Name must contain only letters!!";
	}
    

    if (!mail.value) {
		error_mail = "Email Required!!";
	}
    else if( regexx.test(mail.value)==false && regexxx.test(mail.value)==false )
    {
        error_mail = "Email invalid must have @gmail.com or @yahoo.tn!!";
    }
    
    if (!adress.value) {
		error_adress = "adress Required!!";
	}
    else if (myregex.test(adress.value)==false && reWhiteSpace.test(s.value)==false && num.test(adress.value)==false){
		error_adress = "adress must contain only letters and numbers !!";
	}
	
	if (!pass.value) {
		error_pass = "pass Required!!";
	}
	else if(num.test(pass.value)==false && maj.test(pass.value)==false && min.test(pass.value)==false)
	{
		error_pass = "pass contains!!";
	}
   
      if (error_first) {
		e.preventDefault();
		document.getElementById("error_first").innerHTML = error_first;
		return false;
	}
    else 
    {document.getElementById("error_first").innerHTML = "";}

    if (error_mail) {
		e.preventDefault();
		document.getElementById("error_mail").innerHTML = error_mail;
		return false;
	}
	else
	{document.getElementById("error_mail").innerHTML = "";}

    if (error_adress) {
		e.preventDefault();
		document.getElementById("error_adress").innerHTML = error_adress;
		return false;
	}
    else{document.getElementById("error_adress").innerHTML = "";}
	
	if (error_pass) {
		e.preventDefault();
		document.getElementById("error_pass").innerHTML = error_pass;
		return false;
	}
    else{document.getElementById("error_pass").innerHTML = "";}



});