<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Records</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>

<body>
    <?php
    include('connection.php');

    $query = "SELECT * FROM users";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if ($total > 0) {
    ?>
        <h2 align="center"><mark>Registered All Records</mark></h2>
        <div class="container">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Password</th>
                        <th>Gender</th>
                        <th>Edit</th>
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
                            <td><a href='update_design.php?id=$result[id]' class='btn btn-primary'>Update</a></td>
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

</html>