var articlesElt = document.getElementById("idNews");
ajaxGet("http://localhost/caponweb/db/news.php/1", function (reponse) {
    // Transforme la réponse en un tableau d'articles
    var articles = JSON.parse(reponse);
    articles.forEach(function (article) {
        // Ajout du titre et du contenu de chaque article
        var logoElt = document.createElement("img");
        logoElt.src = './images/NewsImagesBDD/' + article.pictures;
        var nameElt = document.createElement("h5");
        nameElt.textContent = 'auteur: ' + article.name;
        var dateElt = document.createElement("h6");
        dateElt.textContent = 'Date: ' + article.date_creation;
        var titreElt = document.createElement("h2");
        titreElt.textContent = article.subject;
        var contenuElt = document.createElement("p");
        contenuElt.textContent = article.descriptionArticles;
        var divider = document.createElement("hr");
        divider.textContent = '';
        articlesElt.appendChild(logoElt);
        articlesElt.appendChild(nameElt);
        articlesElt.appendChild(dateElt);
        articlesElt.appendChild(titreElt);
        articlesElt.appendChild(contenuElt);
        articlesElt.appendChild(divider);
    });
});
