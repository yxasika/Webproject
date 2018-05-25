function searchFunction() {
    var input, filter, ul, li, a, i, div, h5;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        div = a.getElementsByTagName("div")[0];
        h5 = div.getElementsByTagName("h5")[0];
        if (h5.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}