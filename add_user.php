<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Add New User</title>

</head>

<body>
  
  <div class="row">
    <div class="col-3"></div>
    <div class="col-md-6">
      <div class="card mt-4">
        <div class="card-header">Add Users</div>
        <div class="card-body">
          <form name="userForm" action="save_user.php" method="post" onsubmit="return validateForm()">
            <label>Name:</label>
            <input type="name" name="name" class="form-control m-2" required>
            <label>Email:</label>
            <input type="email" name="email" class="form-control m-2" required>
            <label>Phone:</label>
            <input type="text" name="phone" class="form-control m-2" required>
            <label>Address:</label>
            <input type="text" name="address" class="form-control m-2" required>
            <label>Father Name:</label>
            <input type="text" name="father_name" class="form-control m-2" required>
            <label>Mother Name:</label>
            <input type="text" name="mother_name" class="form-control m-2" required>
            <label>District:</label>
            <select name="district_name" class="form-control m-2" required>
              <option value="">Select District</option>
              <?php
              include_once("config.php");
              $result = mysqli_query($mysqli, "SELECT * FROM districts");
              while ($row = mysqli_fetch_assoc($result)) {
                $district = $row['district_name'];
                echo "<option value='$district'>$district</option>";
              }
              ?>
            </select>
            <input type="submit" class="btn btn-success m-2" value="Save">
          </form>

        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    function validateForm() {
      var email = document.forms["userForm"]["email"].value;
      var phone = document.forms["userForm"]["phone"].value;

      // Email validation
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!email.match(emailPattern)) {
        alert("Please enter a valid email address");
        return false;
      }

      // Phone validation
      var phonePattern = /^\d{11}$/;
      if (!phone.match(phonePattern)) {
        alert("Please enter a valid BD phone number");
        return false;
      }

      return true;
    }
  </script>
</body>

</html>