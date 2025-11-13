<?php
session_start();
include 'inc/connection.php';
// CHECK SESSION START

//   $_SESSION['email']=$_POST['email'];
//   $_SESSION['pass']=$_POST['password'];
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $query = "SELECT * from adminpass where email = '$email' and password='$pass' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    if ($row > 0) {
        $_SESSION['email'] = $_POST['email'];
        header("Location: admin/admindashboard.php");
    } else {
        `<script> function myFunction() 
        {
            var element = document.getElementById("eror");
            element.classList.add("alert alert-danger mt-3");<script>`;
    }
}
if (isset($_SESSION['email'])) {
    header("Location: admin/admindashboard.php");
}
?>
<?php include 'blad/navbar.php'; ?>


<style>
/* Background */
.login-wrapper {
  min-height: 90vh;
  background: url("images/log-img.jpg") center/cover no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Glass Card */
.login-card {
  width: 420px;
  background: rgba(0,0,0,0.55);
  backdrop-filter: blur(6px);
  padding: 35px;
  border-radius: 12px;
  box-shadow: 0 6px 22px rgba(0,0,0,0.5);
  text-align: center;
  color: #fff;
}

/* Inputs */
.login-card input {
  border-radius: 6px;
  border: none;
  height: 45px;
}

.login-card input:focus {
  box-shadow: 0 0 6px #f7b733;
  border: none;
  outline: none;
}

/* Button */
.login-card button {
  width: 100%;
  height: 45px;
  background: #f7b733;
  border: none;
  font-weight: 700;
  border-radius: 6px;
  transition: 0.3s;
}

.login-card button:hover {
  background: #f5a623;
  transform: translateY(-2px);
}

/* Error Alert */
#eror {
  margin-top: 15px;
  font-weight: 600;
  color: #ff6b6b;
  display: none;
}
</style>

<div class="login-wrapper">
  <div class="login-card">

      <img src="images/gymlogo.png" style="width:100px; margin-bottom:18px;"> 
      <h2 style="font-weight:700;">Admin Login</h2>
      <p style="color:#ffc;">
        Access Your Dashboard Securely
      </p>

      <form method="POST" action="loginPage.php">

        <input type="text" name="email" placeholder="Enter Email" class="form-control mt-4" required>

        <input type="password" name="password" placeholder="Enter Password" class="form-control mt-3" required>

        <button type="submit" name="submit" class="mt-4">Login</button>

        <div id="eror">Invalid Email or Password</div>

      </form>

  </div>
</div>

       
      
        </body>

        </html>