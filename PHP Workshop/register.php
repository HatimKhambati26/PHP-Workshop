<?php
    // Make Connection with Database & create a instance (object) of database
    $conn = new mysqli('localhost', 'root', '', 'php_workshop');

    // For Error while Connecting
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Assigning GET values to variables.
    // GET Method NOT RECOMMENDED for SENSITIVE Information
    $username = $_GET["username"];
    $password = $_GET['password'];
    $gender = $_GET['gender'];
    $branch = $_GET['branch'];
    $year = $_GET['year'];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "INSERT INTO `users` (username, password, gender, branch, year) VALUES ('$username','$password','$gender','$branch','$year')";

    // Executing the Query
    if ($conn->query($query) === TRUE) {

        // Display Message and direct to Logout Page
        echo "<script type='text/javascript'> location.href='logout.html';alert('Registered Successfully!!');</script>";
    } 
    else {
        // Display Error Message
        echo "Error: ". $sql."<br>". $conn->error;
    }
