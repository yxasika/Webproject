var pageCounter = 1;
var newContent = document.getElementById("content");
var btn = document.getElementById("showMore");

btn.addEventListener("click", function () {
    var request = new XMLHttpRequest();
    request.open('GET', '../../Server/article-' + pageCounter + '.json');
    request.onload = function () {
        if (request.status >= 200 && request.status < 400) {
            var newData = JSON.parse(request.responseText);
            renderHTML(newData);
        } else {
            console.log("Connected to Server, but it returned an error.");
        }
    }

    request.onerror = function () {
        console.log("Connection error")
    }

    request.send();
    pageCounter++;
    if (pageCounter > 3) {
        btn.classList.add("hide-me");
    }
});

function renderHTML(data) {
    var htmlString = "";

    for (i = 0; i < data.length; i++) {
        htmlString += "<li><a href=\"#\" class=\"list-group-item list-group-item-action flex-column align-items-start\">\n" +
            "        <div class=\"d-flex w-100 justify-content-between\">\n" +
            "        <h5 class=\"mb-1\">" + data[i].title + "<small class=\"text-muted\">" + data[i].published_date + "</small>\n" +
            "        </div>\n" +
            "        <p class=\"mb-1\">" + data[i].description + "</p>\n" +
            "        <small>" + data[i].author + "</small></a></li>";
    }
    newContent.insertAdjacentHTML('beforeend', htmlString);
}