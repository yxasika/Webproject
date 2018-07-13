# Webproject: D+PAD
Uni Oldenburg Webprogrammierung

#PHP.ini
Folgendes muss aktiviert sein:
- extension=pdo_sqlite
- extension=sqlite3

Falls möglich, einfach die php.ini aus dem projektordner verwenden.

#Datenbank
Falls nötig, kann die Datenbank in **Client/db/dpad.db** gelöscht werden und mit **db_setup.php** im selben Ordner bzw. durch das aufrufen von **Client/views/home.php**  wieder erstellt werden.

#Logins
- Email : Passwort :: Rolle

- test@mail.com : test :: author
- muster@mail.com : muster :: editor

#Homepage
Client/views/home.php

#PDF
Der Standordplan Wechloy wurde nur zu Testzwecken verwendet.