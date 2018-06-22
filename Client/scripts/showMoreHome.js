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
        htmlString += '<div class="col-md-4">' +
            '<div class="card">' +
            '<img class="card-img-top" src="' + data[i].img + '" alt="article image">' +
            '<div class="card-body">' +
            '<h5 class="card-title">' + data[i].title + '</h5>' +
            '<i>' + data[i].author + '</i>' +
            '<p><p>' + data[i].published_date + '</p>' +
            '<p>upvotes: <button class="btn btn-outline-secondary" disabled class="button">' + data[i].upvote + '</button></p>' +
            '</p>' +
            '<a href="#" class="btn btn-primary">Read More</a>' +
            '</div>' +
            '</div>' +
            '</div>';
    }
    newContent.insertAdjacentHTML('beforeend', htmlString);
}