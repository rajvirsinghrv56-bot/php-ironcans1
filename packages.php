<?php include 'blad/navbar.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
.pricing-section {
  padding: 60px 0;
  background: #0b1520; /* classy dark blue-black */
}

.pricing-card {
  background: #ffffff;
  padding: 30px;
  border-radius: 18px;
  text-align: center;
  transition: .4s ease;
  border-top: 6px solid #f4b63f; /* gold highlight */
  box-shadow: 0 6px 20px rgba(0,0,0,0.18);
}

.pricing-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 32px rgba(0,0,0,0.25);
}

.pricing-title {
  font-weight: 800;
  font-size: 22px;
  letter-spacing: 1px;
  margin-bottom: 10px;
}

.pricing-amount {
  font-size: 34px;
  font-weight: bold;
  color: #d9534f;
  margin-bottom: 15px;
}

.pricing-description {
  font-size: 15px;
  color: #444;
  min-height: 120px;
}

.package-btn {
  margin-top: 18px;
  padding: 10px 25px;
  background: #f4b63f;
  border-radius: 50px;
  color: black;
  font-weight: 600;
  border: none;
  transition: .3s;
}

.package-btn:hover {
  background: #d9a230;
}
</style>

<section class="pricing-section">
  <div class="container">
    <h2 class="text-center text-light mb-5">Choose Your Fitness Plan</h2>

    <div class="row justify-content-center">

      <!-- PACKAGE 1 -->
      <div class="col-md-4 mb-4 animate__animated animate__fadeInUp">
        <div class="pricing-card">
          <div class="pricing-title">
            <?php
              require 'inc/connection.php';
              $res = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM package WHERE id=1"));
              echo $res['name'];
            ?>
          </div>

          <div class="pricing-amount">
            <?php echo $res['amount']; ?> Rs
          </div>

          <div class="pricing-description">
            <?php echo $res['description']; ?>
          </div>

          <a href="joinMember.php">
            <button class="package-btn">Join Now</button>
          </a>
        </div>
      </div>


      <!-- PACKAGE 2 -->
      <div class="col-md-4 mb-4 animate__animated animate__fadeInUp animate__delay-1s">
        <div class="pricing-card">
          <?php $res = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM package WHERE id=4")); ?>
          <div class="pricing-title"><?php echo $res['name']; ?></div>
          <div class="pricing-amount"><?php echo $res['amount']; ?> Rs</div>
          <div class="pricing-description"><?php echo $res['description']; ?></div>
          <a href="joinMember.php">
            <button class="package-btn">Join Now</button>
          </a>
        </div>
      </div>

      <!-- PACKAGE 3 -->
      <div class="col-md-4 mb-4 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="pricing-card">
          <?php $res = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM package WHERE id=5")); ?>
          <div class="pricing-title"><?php echo $res['name']; ?></div>
          <div class="pricing-amount"><?php echo $res['amount']; ?> Rs</div>
          <div class="pricing-description"><?php echo $res['description']; ?></div>
          <a href="joinMember.php">
            <button class="package-btn">Join Now</button>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
<?php include 'blad/footer.php'; ?>