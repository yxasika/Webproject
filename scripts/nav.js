// Erst starten wenn das Dokument fertig geladen ist.
$(document).ready(function () {
    // Beim ersten Laden muss eine Seite geladen werden.
    $(".content").load("home.html");

    // WENN auf einen Link innerhalb von .fn-nav geklickt wurde, DANN führe diese Funktion aus.
    $('.fn-nav a').click(function (e) {
        // Verhindert, dass der Browser die Seite beim Klick auf einen Link neulädt.
        e.preventDefault();

        // Speichert den Inhalt des Attributes in der Variablen site.
        var site = $(this).data('site');

        // .html an den Namen anhängen.
        site = site + '.html';

        // Seite laden und in .content einsetzen.
        $(".content").load(site);
    });
});