<?php

$connection = mysqli_connect('localhost', 'root', '', 'unicorn');
//check if the database not connected
if (!$connection) {
    echo "database connection error";
}
//GET The name and description from the form in add.php
$name = $_POST['name'];
$title = $_POST['title'];
$description = $_POST['description'];

//insert query
$insert = "INSERT INTO legends(name,title,description)VALUES('$name','$title','$description')";

// execute the query into the database
$result = mysqli_query($connection, $insert);

//check if the data is inserted or not in phpmyadmin
if ($result) {

    echo "data inserted";
} else {
    echo "error in insert";
}
