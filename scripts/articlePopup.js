$(function () {
    var article = document.getElementById('article-wrapper');
    window.onclick = function (event) {
        if (event.target == article) {
            article.style.display = "none";
        }
    }
});