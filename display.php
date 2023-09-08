<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Records</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

    <?php
    // below code for fetching the record from the users table from database
    include('connection.php');

    $query = "SELECT * FROM users";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if ($total > 0) {
    ?>
        <!-- this below line are generates the records in table formate -->
        <a href="home.php"> <i class="fa fa-home text-dark  bg-secondary p-2 mb-3" aria-hidden="true">Home</i></a>

        <h2 align="center" class="text-primary">Registered All Records</h2>
        <div class="container">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone No</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">Edit</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($result = mysqli_fetch_assoc($data)) {
                        echo "<tr>
                            <td>" . $result['id'] . "</td>
                            <td>" . $result['first_name'] . "</td>
                            <td>" . $result['last_name'] . "</td>
                            <td>" . $result['email'] . "</td>
                            <td>" . $result['phone_no'] . "</td>
                            <td>" . $result['password'] . "</td>
                            <td>" . $result['gender'] . "</td>
                            <td><a href='update_design.php?id=$result[id]' class='btn btn-success'>Update</a>
                            <a href='delete.php?id=$result[id]' class='btn btn-danger' onclick= 'return checkdelete()'>Delete</a></td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php
    } else {
        echo "No records found";
    }
    ?>
</body>
<script>
    function checkdelete() {
        return confirm('Are you sure your want to delete this record')

    }
</script>

</html>