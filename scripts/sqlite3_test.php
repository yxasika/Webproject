<?php
$user = "root";
$pw = null;
//$dsn = "mysql:dbname=PHP-PDO;host=localhost";
 $dsn = 'sqlite:../db.db';
$db = new PDO($dsn, $user, $pw);

$db->exec("CREATE TABLE IF NOT EXISTS (email TEXT PRIMARY KEY, firstname TEXT, lastname TEXT, password TEXT, role TEXT)");

//insert some data...
$db->exec
(
    "INSERT INTO Users (email, firstname, lastname, password, role) VALUES ('muster@mail.com', 'Max', 'Mustermann', ".md5('author').", 'author');".
    "INSERT INTO Users (email, firstname, lastname, password, role) VALUES ('editor@mail.com', 'Edi', 'Tor', ".md5('editor').", 'editor'); " .
    "INSERT INTO Users (email, firstname, lastname, password, role) VALUES ('author@mail.com', 'Au', 'Tor', ".md5('author').", 'author'); "
);

print "<table border=1>";
print "<tr><td>email</td><td>firstname</td><td>lastname</td><td>role</td></tr>";
$result = $db->query('SELECT * FROM Users');
foreach($result as $row)
{
    print "<tr><td>".$row['email']."</td>";
    print "<td>".$row['firstname']."</td>";
    print "<td>".$row['lastname']."</td>";
    print "<td>".$row['role']."</td></tr>";
}
print "</table>";

$db = NULL;
?>

