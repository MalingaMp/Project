<?php
include('connection.php');
// the below code for updating the records
//this below lines are help to fill the old record in the field  
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

    <a href="home.php"> <i class="fa fa-home text-dark  bg-secondary p-2 mb-3" aria-hidden="true">Home</i></a>


    <div class="container d-flex justify-content-center w-50 p-3">
        <form action="#" method="POST">
            <div class="row">
                <div class="panel panel-primary   ">

                    <div class="panel-heading p-3 text-primary-emphasis ">
                        <h3 class="text-primary">Update Your Details</h3>
                    </div>


                    <div class="panel-body p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">

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
                            <label>Gender</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="Male" required <?php
                                                                                                                        if ($result['gender'] == "Male") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?>>
                                    <label class="form-check-label" for="Male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="Female" <?php
                                                                                                                if ($result['gender'] == "Female") {
                                                                                                                    echo "checked";
                                                                                                                }
                                                                                                                ?>>
                                    <label class="form-check-label" for="Female">Female</label>
                                </div>
                            </div>
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
//the below code will update the record
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
        //user get the alert message

        echo "<script>alert('Record Updated')</script>";
?>
        <!-- the below meta tag helps to redirect the records page -->

        <meta http-equiv="refresh" content="0; url = http://localhost/home/display.php" />
<?php
    } else {
        echo "failed to update" . mysqli_connect_error();
    }
}
?>