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
        htmlString += '<div class="card text-center bg-light mb-3">' +
            '<div class="card-header">' +
            '<img class="card-img-top" src="' + data[i].img + '" alt="article image">' +
            '</div>' +
            '<div class="card-body">' +
            '<h5 class="card-title">' + data[i].title + '</h5>' +
            '<i>' + data[i].author + '</i></br>' +
            data[i].published_date + '</br>';
        for (ii = 0; ii < data[i].category.length; ii++) {
            htmlString += '<a href="#" class="badge badge-info mr-2">' + data[i].category[ii] + '</a>';
        }
        htmlString += '<p></p>' +
            '<div class="card-footer row">' +
            '<a href="#" class="btn btn-primary mr-4">Read More</a>' +
            '<button class="btn btn-warning" disabled class="button">upvotes: ' + data[i].upvote + '</button>' +
            '</div>' +
            '</div>' +
            '</div>';

    }
    newContent.insertAdjacentHTML('beforeend', htmlString);
}