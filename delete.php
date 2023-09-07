<?php
include('connection.php');
// this code will delete the record record selected id
$id = $_GET['id'];

$query = "DELETE FROM users WHERE id='$id' ";

$data = mysqli_query($conn, $query);


if ($data) {

    echo "<script>
        alert('Record Deleted');
    </script>";

?>
    <meta http-equiv="refresh" content="0; url=http://localhost/home/display.php" />
<?php
} else {
    echo "Failed to Delete";
}
