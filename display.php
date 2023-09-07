    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display Records</title>
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    </head>

    <body>

    </body>

    </html>
    <?php
    include('connection.php');

    $query = "SELECT * FROM users";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);




    if ($total > 0) {
    ?>
        <h2 align="center"><mark>Displaying All Records</mark> </h2>
        <center>
            <table border="2" cellspacing='80%'>
                <tr>
                    <th width='10%'>Id</th>
                    <th width='10%'>First Name</th>
                    <th width='10%'>Last Name</th>
                    <th width='10%'>Email</th>
                    <th width='10%'>Phone No</th>
                    <th width='10%'>password</th>
                    <th width='10%'>Gender</th>
                    <th width='10%'>Edit</th>
                </tr>


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
        <td><a href='update_design.php?id=$result[id]'>
        <input type='submit' value='Update' class='btn btn-primary'></a>
        </td>
        </tr>";
            }
        } else {
            echo "No records found";
        }
            ?>

            </table>
        </center>