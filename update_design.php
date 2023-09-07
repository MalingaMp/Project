<?php
include('connection.php');

$id = $_GET['id'];
$query = "SELECT * FROM users where id = '$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update Details</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>

<body>



    <div class="container d-flex justify-content-center w-50 p-3">
        <form action="#" method="POST">
            <div class="row">
                <div class="panel panel-primary  ">

                    <div class="panel-heading border p-2  mb-3">
                        <h3 class="text-primary">Update Your Details</h3>
                    </div>


                    <div class="panel-body">

                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" value="<?php echo $result['first_name']; ?>" name="first_name" class="form-control" id="first_name" pattern="[A-Za-z]+" required>

                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" value="<?php echo $result['last_name']; ?>" name="last_name" class="form-control" id="last_name" pattern="[A-Za-z]+" required>

                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" value="<?php echo $result['email']; ?>" class="form-control" name="email" id="email" required>

                        </div>

                        <div class="form-group">
                            <label for="phone_no">Phone No:</label>
                            <input type="tel" value="<?php echo $result['phone_no']; ?>" class="form-control" name="phone_no" id="phone_no" pattern="[0-9]+" required>

                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" value="<?php echo $result['email']; ?>" class="form-control" name="password" id="password" minlength="7" required>

                        </div>

                        <div class="form-group">
                            <label>Gender:</label>
                            <select name="gender" class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>

                        </div>
                        <a href="./display.php">
                            <input type="submit" name="update" class="btn btn-primary" value="Update">
                        </a>
                        <!-- <input type="submit" name="update" class="btn btn-primary" value="Update"> -->


                    </div>


                </div>
            </div>
    </div>
    </form>
    </div>

</body>

</html>

<?php
if (isset($_POST['update'])) {

    $first_name  = $_POST["first_name"];
    $last_name   = $_POST["last_name"];
    $email       = $_POST["email"];
    $phone_no    = $_POST["phone_no"];
    $password    = $_POST["password"];
    $gender      = $_POST["gender"];


    $query = "UPDATE users SET first_name='$first_name', last_name='$last_name', 
    email='$email', phone_no='$phone_no', password='$password', gender='$gender' WHERE id='$id'";


    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Record Updated')</script>";
?>
        <meta http-equiv="refresh" content="0; url = http://localhost/home/display.php" />
<?php
    } else {
        echo "failed to update" . mysqli_connect_error();
    }
}
?>