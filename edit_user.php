<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Edit User</title>

</head>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header">Edit User</div>
                <div class="card-body">
                    <?php
                    include_once("config.php");

                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
                        $user = mysqli_fetch_array($result);
                    }
                    ?>
                    <form name="userForm" action="update_user.php" method="post" onsubmit="return validateForm()">
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <label>Name:</label>
                        <input type="name" name="name" class="form-control m-2" value="<?php echo $user['name']; ?>" required>
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control m-2" value="<?php echo $user['email']; ?>" required>
                        <label>Phone:</label>
                        <input type="text" name="phone" class="form-control m-2" value="<?php echo $user['phone']; ?>" required>
                        <label>Address:</label>
                        <input type="text" name="address" class="form-control m-2" value="<?php echo $user['address']; ?>" required>
                        <label>Father Name:</label>
                        <input type="text" name="father_name" class="form-control m-2" value="<?php echo $user['father_name']; ?>" required>
                        <label>Mother Name:</label>
                        <input type="text" name="mother_name" class="form-control m-2" value="<?php echo $user['mother_name']; ?>" required>
                        <label>District:</label>
                        <select name="district_name" class="form-control m-2" required>
                            <option value="">Select District</option>
                            <?php
                            $districtResult = mysqli_query($mysqli, "SELECT * FROM districts");
                            while ($districtRow = mysqli_fetch_assoc($districtResult)) {
                                $district = $districtRow['district_name'];
                                $selected = ($district == $user['district']) ? 'selected' : '';
                                echo "<option value='$district' $selected>$district</option>";
                            }
                            ?>
                        </select>

                        <input type="submit" class="btn btn-success m-2" value="Update">
                    </form>

                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html