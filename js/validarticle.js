var articlesElt = document.getElementById("idNews");
ajaxGet("http://51.75.126.61/db/news.php", function (reponse) {
    // Transforme la réponse en un tableau d'articles
    var articles = JSON.parse(reponse);
    articles.forEach(function (article) {
        
        // Ajout du titre et du contenu de chaque article
        var nameElt = document.createElement("span");
        nameElt.textContent = article.name;
        var titreElt = document.createElement("h2");
        titreElt.textContent = article.subject;
        var contenuElt = document.createElement("p");
        contenuElt.textContent = article.descriptionArticles;
        articlesElt.appendChild(nameElt);
        articlesElt.appendChild(titreElt);
        articlesElt.appendChild(contenuElt);
    });
});
