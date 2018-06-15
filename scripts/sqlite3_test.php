<?php
try
{
    //open the database
    $db = new PDO('sqlite:../db.s3db');

    //create the database
    $db->exec("CREATE TABLE Users (email TEXT PRIMARY KEY, firstname TEXT, lastname TEXT, password TEXT, role TEXT)");

    //insert some data...
    $db->exec
    (
        "INSERT INTO Users (email, firstname, lastname, password, role) VALUES ('muster@mail.com', 'Max', 'Mustermann', ".md5('author').", 'author');".
        "INSERT INTO Users (email, firstname, lastname, password, role) VALUES ('editor@mail.com', 'Edi', 'Tor', ".md5('editor').", 'editor'); " .
        "INSERT INTO Users (email, firstname, lastname, password, role) VALUES ('author@mail.com', 'Au', 'Tor', ".md5('author').", 'author'); "
    );

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

try
{
    //open the database
    $db = new PDO('sqlite:../dogsDb_PDO.sqlite');


        //create the database
        $db->exec("CREATE TABLE Dogs (Id INTEGER PRIMARY KEY, Breed TEXT, Name TEXT, Age INTEGER)");


        //insert some data...
        $db->exec("INSERT INTO Dogs (Breed, Name, Age) VALUES ('Labrador', 'Tank', 2);" .
            "INSERT INTO Dogs (Breed, Name, Age) VALUES ('Husky', 'Glacier', 7); " .
            "INSERT INTO Dogs (Breed, Name, Age) VALUES ('Golden-Doodle', 'Ellie', 4);" .
            "INSERT INTO Dogs (Breed, Name, Age) VALUES ('testy', 'test', 8);");


    //now output the data to a simple html table...
    print "<table border=1>";
    print "<tr><td>Id</td><td>Breed</td><td>Name</td><td>Age</td></tr>";
    $result = $db->query('SELECT * FROM Dogs');
    foreach($result as $row)
    {
        print "<tr><td>".$row['Id']."</td>";
        print "<td>".$row['Breed']."</td>";
        print "<td>".$row['Name']."</td>";
        print "<td>".$row['Age']."</td></tr>";
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