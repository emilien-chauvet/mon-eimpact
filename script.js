function calculer() {
	// Récupération des valeurs saisies par l'utilisateur
	let tempsOrdinateur = document.getElementById("temps-ordinateur").value;
	let tempsYoutube = document.getElementById("temps-youtube").value;
	let nbEmails = document.getElementById("nb-emails").value;
    let sectionResultat = document.getElementById("resultat_guest");

	// Calcul de l'empreinte carbone générée
	let empreinteCarbone = (tempsOrdinateur * 0.055) + (tempsYoutube * 0.012) + (nbEmails * 0.0000001);

	// Affichage du résultat
	let resultat = document.getElementById("resultat");
	resultat.innerHTML = "Votre empreinte carbone générée est de " + empreinteCarbone.toFixed(2) + " kgCO2e par jour.";

    sectionResultat.style.display = "flex";
}

function checkPassword() {
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    var pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?])(?=.*[a-zA-Z]).{10,}$/;
    var passwordError = document.getElementById("password-error");
    if (pattern.test(password)) {
        if (password === confirm_password) {
            passwordError.innerHTML = ""; // Efface le message d'erreur
            return true;
        } else {
            passwordError.innerHTML = "<p class='msg_error_inscription_mdp'>Les deux mots de passe ne correspondent pas.</p>";
            return false;
        }
    } else {
        passwordError.innerHTML = "<p class='msg_error_inscription_mdp'>Le mot de passe doit contenir au moins 10 caractères avec au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial !</p>";
        return false;
    }
}