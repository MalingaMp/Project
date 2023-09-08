<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Screen 1 - Registration Form</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div>
        <a href="home.php"> <i class="fa fa-home text-dark  bg-secondary p-2 mb-3" aria-hidden="true">Home</i></a>
    </div>
    <div class="container d-flex justify-content-center w-50 p-3">
        <form action="#" method="POST">
            <div class="row">
                <div class="panel panel-primary p-3 text-primary-emphasis  ">
                    <div class="panel-heading  ">

                        <h3 class="text-primary">REGISTRATION FORM</h3>
                    </div>
                    <div class="panel-body p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                        <div class=" form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" pattern="[A-Za-z]+" required>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" pattern="[A-Za-z]+" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone_no">Phone No</label>
                            <input type="tel" class="form-control" name="phone_no" id="phone_no" pattern="[0-9]+" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" minlength="7" required>
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="Male" value="Male" required>
                                    <label class="form-check-label" for="Male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="Female" value="Female">
                                    <label class="form-check-label" for="Female">Female</label>
                                </div>
                            </div>
                        </div>



                        <div class="form-group text-center">
                            <input type="submit" name="register" class="btn btn-primary btn-block" value="Submit">
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<?php
// when user submit the button below code insert the new record
if (isset($_POST['register'])) {

    $first_name  = $_POST["first_name"];
    $last_name   = $_POST["last_name"];
    $email       = $_POST["email"];
    $phone_no    = $_POST["phone_no"];
    $password    = $_POST["password"];
    $gender      = $_POST["gender"];

    $query = "INSERT INTO users (first_name, last_name, email, phone_no, password, gender)
            VALUES ('$first_name', '$last_name', '$email', '$phone_no', '$password', '$gender')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Form Submitted Successfully')</script>";
        //  following lines to redirect to another page after successful registration
?>
        <meta http-equiv="refresh" content="0; url = http://localhost/home/home.php" />
<?php
    } else {
        echo "Connection failed: " . mysqli_connect_error();
    }
}
?>