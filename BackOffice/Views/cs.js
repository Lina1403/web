
function verif() {

    var name = document.forms["Formu"]["name"].value;
    var email = document.forms["Formu"]["email"].value;
    var password = document.forms["Formu"]["pass"].value;
    var adresse = document.forms["Formu"]["adresse"].value;
    var errorN = document.getElementById('errorNR');
    var errorEmail = document.getElementById('errorMR');
    var errorPass = document.getElementById('errorPass');
    var erroradresse = document.getElementById('erroradresse');
    var er1=1;
    var er2=1;
    var er3=1;
    var er4=1;
    var letters = /^[A-Za-z]+$/;
    let admin = new RegExp('Admin');
    let livreur = new RegExp('livreur');

    if (name == "") {
        errorN.innerHTML = "Veuillez entrer votre nom!";
        
    }
    else if (!(name.match(letters) && name.charAt(0).match(/^[A-Z]+$/))) {
        errorN.innerHTML = "Veuillez entrer un nom valid!";
    } else {
        errorN.innerHTML = "";
        er1=0;
    }

    if (email == "") {
        errorEmail.innerHTML = "Veuillez entrer votre email!";

    }
    else if (!email.match('@ewear.tn')) {
        errorEmail.innerHTML = "Veuillez entrer un email valid!";
    }
    else {
        errorEmail.innerHTML = "";
        er2=0;
    }

    if (password == "") {
        errorPass.innerHTML = "Veuillez eedrrrrrrrrrrntrer votre mot de passe!";

    }
    else if (!(password.match(/[0-9]/g) &&
        password.match(/[A-Z]/g) &&
        password.match(/[a-z]/g) &&
        password.length >= 8)) {
        errorPass.innerHTML = "Le mot de passe doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre.";

    }
    else {
        errorPass.innerHTML = "";
        er3=0;
    }

    if (adresse == "") {
        erroradresse.innerHTML = "Veuillez entrer votre adress!";

    }
    else if (!adresse.match(",tunis")) {
        erroradresse.innerHTML = "Veuillez entrer une adress qui se termine avec ,tunis";
    }
    else {
        erroradresse.innerHTML = "";
        er4=0;
    }

    if(er1== 1 || er2==1 || er3== 1 || er4== 1 ){
        return 1;
    }else{
        return 0;
    } 


}

function validateForm(e) {
   if (verif()==1)
   {
    e.preventDefault();
    }
    
};