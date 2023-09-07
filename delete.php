<?php
include('connection.php');

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id='$id' ";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script>
    setTimeout(function() {
        alert('Record Deleted');
    }, 0); // Change the delay (in milliseconds) to control how long the alert is displayed
</script>";
?>
    <meta http-equiv="refresh" content="0; url = http://localhost/home/display.php" />
<?php
} else {
    echo "Failed to Delete";
}
