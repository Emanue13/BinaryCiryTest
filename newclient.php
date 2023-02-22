<!--=============== Connects to the server and sql code to insert datas on my database table  ===============-->
<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['Phone'];
        $q = " INSERT INTO `users`(`first_name`,`middle_name`,`last_name`, `email`, `phone_number`) VALUES ( '$fname','$mname','$lname', '$email', '$phone' )";

        $query = mysqli_query($conn,$q);
    }
?>
<!--==============================================================end===============-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="client/style.css">
</head>
<body>
  <!--=============== CLIENT FORM ===============-->
  <div class="container">
    <h2>Add New Client</h2>
    <form id="registration-form" action="#" method="POST">
      <label for="first-name">First Name</label>
      <input type="text" id="fname" name="fname" required>

      <label for="middle-name">Middle Name</label>
      <input type="text" id="Mname" name="mname">

      <label for="last-name">Last Name</label>
      <input type="text" id="Lname" name="lname" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="phone-number">Phone Number</label>
      <input type="tel" id="phone" name="Phone" required>

      <button type="submit" class="btn" name="submit" id="submitbtn">Save</button>
      <button class="back"><a href="list.php">back</a></button>
    </form>
  </div>
  <!--=========================================================================-->

  <!--=============== POPUP MESSAGE ===============-->
  <div id="success-message" class="modal">
    <div class="modal-content">
      <span class="close-button">&times;</span>
      <p>Contact saved successfully!</p>
    </div>
  </div>

  <script src="client/hid.js"></script>
  <script src="client/popup.js"></script>
</body>
</html>