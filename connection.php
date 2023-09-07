<?php

//this is the code for connection database 
// $servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
//$username = "root";        // Your MySQL username
//$password = "";            // Your MySQL password
//$database = "your_database_name"; // Your MySQL database name


$conn = mysqli_connect("localhost", "root", " ", "form_data");

if ($conn) {
    // echo "connection ok";
} else {
    echo "connection failed" . mysqli_connect_error();
}
