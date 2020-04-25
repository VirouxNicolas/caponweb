var form = document.querySelector("form");
form.addEventListener("submit", function (e) {
    var password = form.elements.password.value;
    var mdp2 = form.elements.mdp2.value;
    var message = "Mots de passe OK";
    if (password === mdp2) {
        if (password.length >= 6) {
            var regexMdp = /\d+/;
            if (!regexMdp.test(password)) {
                message = "Erreur : le mot de passe ne contient aucun chiffre";
            }
        } else {
            message = "Erreur : la longueur minimale du mot de passe est de 6 caractères";
        }
    } else {
        message = "Erreur : les mots de passe saisis sont différents";
    }
    document.getElementById("infoMdp").textContent = message;
    e.preventDefault();
});