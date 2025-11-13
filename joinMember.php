<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="./js/validation.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
  </style>
</head>

<body>
  <!--Navbaar-->

  <?php include 'blad/navbar.php'; ?>

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap + AOS + Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }

    /* HERO SECTION */
    .join-hero {
      background: url("images/header.jpg") center/cover no-repeat; /* Change image */
      height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .join-hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.55);
    }

    .join-hero h2 {
      z-index: 2;
      font-weight: 800;
      font-size: 2.6rem;
      letter-spacing: 1px;
      color: #fff;
      text-transform: uppercase;
    }

    /* FORM CARD */
    .join-card {
      background: rgba(255,255,255,0.92);
      border-radius: 14px;
      box-shadow: 0 8px 28px rgba(0,0,0,0.25);
      padding: 35px 30px;
      margin-top: -60px;
    }

    label {
      font-weight: 600;
      color: #333;
    }

    .form-control {
      border-radius: 8px;
      background: #f2f2f2;
    }

    .form-control:focus {
      background: #fff;
      border-color: #222;
      box-shadow: 0 0 8px rgba(0,0,0,0.3);
    }

    .btn-primary {
      background: #e3b448;
      border: none;
      padding: 10px 25px;
      font-weight: 700;
      border-radius: 8px;
    }

    .btn-primary:hover {
      background: #c89c38;
    }
  </style>
</head>

<body>



<!-- HERO -->
<section class="join-hero">
  <h2 data-aos="fade-up">Join Iron Can’s Gym</h2>
</section>

<!-- FORM -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6 join-card" data-aos="fade-up">

      <h4 class="text-center mb-4 font-weight-bold">Get in Touch With Us</h4>

      <form method="POST" action="joinMember.php" onsubmit="return joinMemberValidation()">
        
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" id="email" name="emailid" required>
        </div>

        <div class="form-group">
          <label>Phone</label>
          <input type="number" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" id="address" name="address" required>
        </div>

        <div class="text-center">
          <button type="submit" name="submit" class="btn btn-primary">Join Now</button>
        </div>

      </form>

    </div>
  </div>
</div>
<br>
<br>
<br>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>

</body>
</html>

</body>

</html>


<?php
require 'inc/connection.php';
if (isset($_POST['submit'])) {


  $name = $_POST['name'];
  $emailid = $_POST['emailid'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  $sql = "INSERT INTO join_member(name, email, phone, address)VALUES('$name', '$emailid' ,'$phone', '$address')";

  $res = mysqli_query($conn, $sql);

  if ($res) {
    print_r(" <script>
    Swal.fire(
      'Good job!',
      'Your Record is Submitted!',
      'success'
    )
  </script>");

  }}
  ?>


<?php
require 'blad/footer.php';

?>