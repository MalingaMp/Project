<?php



$conn = mysqli_connect("localhost", "root", " ", "form_data");

if ($conn) {
    // echo "connection ok";
} else {
    echo "connection failed" . mysqli_connect_error();
}
