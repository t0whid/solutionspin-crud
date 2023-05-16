<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Users Crud</title>
</head>

<body>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center text-dark mt-4">USERS CRUD</h2>

            <a href="add_user.php" class="btn btn-success btn-sm"> <i class="fa fa-plus" aria-hidden="true"></i>Add User</a>
            <div class="container">
                <table class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>District</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("config.php");
                        $i = 0;
                        $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY users.id ASC");
                        while ($user = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . ++$i . "</td>";
                            echo "<td>" . $user['name'] . "</td>";
                            echo "<td>" . $user['email'] . "</td>";
                            echo "<td>" . $user['phone'] . "</td>";
                            echo "<td>" . $user['address'] . "</td>";
                            echo "<td>" . $user['father_name'] . "</td>";
                            echo "<td>" . $user['mother_name'] . "</td>";
                            echo "<td>" . $user['district'] . "</td>";
                            echo "<td>
                                <a href='edit_user.php?id=" . $user['id'] . "'><i class='fa-solid fa-pen-to-square text-success mx-2'></i></a>
                                <a href='delete_user.php?id=" . $user['id'] . "' onclick='return confirm(&quot;Confirm delete?&quot;)'><i class='fa fa-trash text-danger'></i></i></a>
                            </td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/6b00bf539f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>