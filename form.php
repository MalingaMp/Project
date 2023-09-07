<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Screen 1 -Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body>



    <div class="container d-flex justify-content-center w-50 p-3">
        <form action="#" method="POST">
            <div class="row">
                <div class="panel panel-primary  ">

                    <div class="panel-heading border p-2  mb-3">
                        <h3 class="text-primary">REGISTRATION FORM</h3>
                    </div>


                    <div class="panel-body">

                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" pattern="[A-Za-z]+" required>

                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" pattern="[A-Za-z]+" required>

                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" required>

                        </div>

                        <div class="form-group">
                            <label for="phone_no">Phone No:</label>
                            <input type="tel" class="form-control" name="phone_no" id="phone_no" pattern="[0-9]+" required>

                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" id="password" minlength="7" required>

                        </div>

                        <div class="form-group">
                            <label>Gender:</label>
                            <select name="gender" class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>

                        </div>
                        <input type="submit" name="register" class="btn btn-primary" value="Register">


                    </div>


                </div>
            </div>
    </div>
    </form>
    </div>

</body>

</html>

<?php
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
        echo "data inserted in to Database";
        // header("Location: display.php");
        // exit;
    } else {
        echo "connection failed" . mysqli_connect_error();
    }
}

?>