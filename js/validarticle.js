var articlesElt = document.getElementById("idNews");
ajaxGet("http://localhost/caponweb/db/news.php/1", function (reponse) {
    // Transforme la réponse en un tableau d'articles
    var articles = JSON.parse(reponse);
    articles.forEach(function (article) {
        
        // Ajout du titre et du contenu de chaque article
        var logoElt = document.createElement("img");
        logoElt.src = article.pictures;
        var nameElt = document.createElement("span");
        nameElt.textContent = article.name;
        var titreElt = document.createElement("h2");
        titreElt.textContent = article.subject;
        var contenuElt = document.createElement("p");
        contenuElt.textContent = article.descriptionArticles;
        var dateElt = document.createElement("h5");
        dateElt.textContent = article.date_creation;
        articlesElt.appendChild(logoElt);
        articlesElt.appendChild(nameElt);
        articlesElt.appendChild(titreElt);
        articlesElt.appendChild(contenuElt);
        articlesElt.appendChild(dateElt);
    });
});
