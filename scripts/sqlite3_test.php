<?php
try
{
    //open the database
    $db = new PDO('sqlite:../db.s3db');

    //create the database
    $db->exec("CREATE TABLE Users (email TEXT PRIMARY KEY, firstname TEXT, lastname TEXT, password TEXT, role TEXT)");

    //insert some data...
    $db->exec("INSERT INTO Users (email, firstname, lastname, password, role) VALUES ('muster@mail.com', 'Max', 'Mustermann', md5('author'), 'author');".
        "INSERT INTO Users (email, firstname, lastname, password, role) VALUES ('editor@mail.com', 'Edi', 'Tor', md5('editor'), 'editor'); " .
        "INSERT INTO Users (email, firstname, lastname, password, role) VALUES ('author@mail.com', 'Au', 'Tor', md5('author'), 'author'); ");

    //now output the data to a simple html table...
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

    // close the database connection
    $db = NULL;
}
catch(PDOException $e)
{
    print 'Exception : '.$e->getMessage();
}
?>