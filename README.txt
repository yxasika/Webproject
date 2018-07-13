# Webproject: D+PAD
Uni Oldenburg Webprogrammierung

#PHP.ini
Folgendes muss aktiviert sein:
- extension=pdo_sqlite
- extension=sqlite3

Falls möglich, einfach die php.ini aus dem projektordner verwenden.

#Datenbank
Falls nötig, kann die Datenbank in **Client/db/dpad.db** gelöscht werden und mit **db_setup.php** im selben ordner wieder erstellt werden.

#Logins
- Email : Passwort :: Rolle

- test@mail.com : test :: author
- muster@mail.com : muster :: editor
- dibo@mail.com : dibo :: editor
- pol@mail.com : pol :: author