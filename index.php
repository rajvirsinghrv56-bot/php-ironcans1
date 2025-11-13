<?php include 'blad/navbar.php';?>
<script src="https://kit.fontawesome.com/2dfceedea2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./assets/css/fontawesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="blad/css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
</style>
</head>

<body style=" font-family: 'Nunito', sans-serif;font-size:1rem;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-3 text-center" style="height: 50px; background-color: rgb(129, 201, 129);">
                <p style="color: #000; padding-top: 15px; font-weight: 700;">Today's Mega Offer! <i class="fa-solid fa-bars-filter"></i></p>

            </div>
            <div class="col-sm-9 col-md-9" style="background-color: rgb(120, 129, 102); height: 50px;">
                <marquee width="100%" direction="left">
                    <p style="color: #fff; font-weight: 600; padding-top: 10px;">
                        <?php
                        include './inc/connection.php';

                        $selectquery = "select * from notice WHERE id = 2";
                        $query = mysqli_query($conn, $selectquery);
                        $num = mysqli_num_rows($query);
                        while ($res = mysqli_fetch_array($query)) {
                            echo $res['notice'];
                        }


                        ?></p>
                </marquee>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="padding: 20px;">
              
<h1 class="strongHeadMain text-uppercase" style="font-weight:900;">
  BE <span style="color:red;">STRONG</span>, 
  BE <span style="color:red;">CONSISTENT</span>, 
  BE <span style="color:red;">UNSTOPPABLE</span>.
</h1>

<p class="textBe">
Iron Can’s Gym is known for disciplined training, focused results and a motivating environment. 
We provide strength training, group fitness, cardio, crossfit and personal coaching under 
certified and experienced trainers. Whether you’re a beginner or already advanced, we help you 
train with the right form, the right intensity and the right guidance to reach real results.
</p>

                <a href="https://www.google.com/maps/place/Iron+Can's+gym+%7C+Best+Gym+In+Jalandhar+%7C+Luxury+Gym/@31.333741,75.6087177,17z/data=!3m1!4b1!4m6!3m5!1s0x391a5b5b3cdea705:0xade42bd1a36bd476!8m2!3d31.333741!4d75.6087177!16s%2Fg%2F11s0s528l8?hl=en-in&entry=ttu&g_ep=EgoyMDI1MTEwNC4xIKXMDSoASAFQAw%3D%3D" class="text-first"><button class="btn btn-warning text-dark">Know More</button></a>
                <div class="container" style="margin-top: 60px;">
                    <div class="row">
                        <div class="col-md-4 fa text-center" id="abc">
                            <i class="fas fa-cog fa-4x"></i>
                            <h6 class="abcd">Beginners</h6>

                        </div>
                        <div class="col-md-4 text-center" id="abc">
                            <i class="fas fa-cogs fa-4x"></i>
                            <h6 class="abcd">Intermediate</h6>
                        </div>
                        <div class="col-md-4 text-center" id="abc">
                            <i class="fas fa-users-cog fa-4x"></i>
                            <h6 class="abcd">Advanced</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/bodyBuilder2.png" width="100%" alt="body builder">
            </div>
        </div>
        <br><br>
       <div class="container services-wrapper">
    <h3 id="services-title">Our Services</h3>
    <div class="row">
        <!-- your service cards here (no change needed inside) -->


        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
            <div class="card service-card">
                <img src="images/services1.jpg" class="card-img-top" alt="Cardio Training">
                <div class="card-body">
                    <h5 class="card-title text-center">Cardio & Fat Burning</h5>
                    <p class="card-text">
                        High-intensity cardio sessions designed to burn fat and improve stamina. 
                        Our trainers guide you with proper breathing, pacing and endurance building 
                        for long-term fitness improvement.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
            <div class="card service-card">
                <img src="images/services2.jpg" class="card-img-top" alt="CrossFit Training">
                <div class="card-body">
                    <h5 class="card-title text-center">CrossFit & Functional Training</h5>
                    <p class="card-text">
                        Strength + speed + agility. Our CrossFit program targets overall body 
                        performance using compound training techniques that make your body stronger, 
                        flexible and injury-free.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
            <div class="card service-card">
                <img src="images/services3.jpg" class="card-img-top" alt="Personal Coaching">
                <div class="card-body">
                    <h5 class="card-title text-center">Personal Training + Diet Guidance</h5>
                    <p class="card-text">
                        One-on-one workout plans tailored according to your body structure, goals 
                        and consistency. Includes complete diet support and weekly progress tracking 
                        to help you transform the right way.
                    </p>
                </div>
            </div>
        </div>
     <!-- Card 4 -->
<div class="col-lg-4 col-md-6 col-sm-12 pb-3">
    <div class="card service-card">
        <img src="images/services4.jpg" class="card-img-top" alt="Strength Training">
        <div class="card-body">
            <h5 class="card-title text-center">Strength & Muscle Training</h5>
            <p class="card-text">
                Focused weight training designed to build muscle mass, increase endurance 
                and improve overall body strength under proper supervision and safe techniques.
            </p>
        </div>
    </div>
</div>

<!-- Card 5 -->
<div class="col-lg-4 col-md-6 col-sm-12 pb-3">
    <div class="card service-card">
        <img src="images/services5.jpg" class="card-img-top" alt="Fat Loss Program">
        <div class="card-body">
            <h5 class="card-title text-center">Weight Loss / Gain Transformation</h5>
            <p class="card-text">
                Personalized transformation programs designed according to your goal, 
                metabolism and lifestyle. Includes diet charts + weekly progress tracking.
            </p>
        </div>
    </div>
</div>

<!-- Card 6 -->
<div class="col-lg-4 col-md-6 col-sm-12 pb-3">
    <div class="card service-card">
        <img src="images/services6.jpg" class="card-img-top" alt="Zumba / Group Fitness">
        <div class="card-body">
            <h5 class="card-title text-center">Zumba & Group Fitness Sessions</h5>
            <p class="card-text">
                High-energy music, dance workouts and group sessions that help burn calories 
                and improve mood while making fitness fun and motivating.
            </p>
        </div>
    </div>
</div>

<!-- Card 7 -->
<div class="col-lg-4 col-md-6 col-sm-12 pb-3">
    <div class="card service-card">
        <img src="images/services7.jpg" class="card-img-top" alt="Flexibility & Mobility">
        <div class="card-body">
            <h5 class="card-title text-center">Flexibility & Mobility Training</h5>
            <p class="card-text">
                Improve posture, reduce stiffness and enhance joint movement with guided 
                stretching and mobility workouts suitable for all ages.
            </p>
        </div>
    </div>
</div>

<!-- Card 8 -->
<div class="col-lg-4 col-md-6 col-sm-12 pb-3">
    <div class="card service-card">
        <img src="images/services8.jpg" class="card-img-top" alt="Women's Special Fitness">
        <div class="card-body">
            <h5 class="card-title text-center">Women's Strength & Fitness</h5>
            <p class="card-text">
                Dedicated training plans for women focusing on strength, toning, confidence 
                and holistic fitness, led by our female certified coach.
            </p>
        </div>
    </div>
</div>

<!-- Card 9 -->
<div class="col-lg-4 col-md-6 col-sm-12 pb-3">
    <div class="card service-card">
        <img src="images/services9.jpg" class="card-img-top" alt="Diet & Supplement Guidance">
        <div class="card-body">
            <h5 class="card-title text-center">Diet & Supplement Guidance</h5>
            <p class="card-text">
                Get personalized nutrition plans to match your training. 
                Supplement recommendations only when necessary and safe.
            </p>
        </div>
    </div>
</div>
   

    </div>
</div>

    <br>
    <hr style="width:150px;margin:10px auto;height:3px" class="bg-warning">
    <br>
    <!-- ----------------trainer part start----------- -->
    <div class="container" style="margin-bottom: 60px;">
 <br> <br>
    <h1 class="trainer text-center mb-4" style="font-weight:700;">Our Trainers</h1>
 <hr style="width:150px;margin:10px auto;height:3px" class="bg-warning">
    <div class="row justify-content-center">

        <!-- Trainer 1 -->
        <div class="col-md-3 trainer-card text-center">
            <img src="images/coach1.png" class="trainer-img">
            <h5 class="trainer-name">Hardeep Singh Tiwana</h5>
            <p class="trainer-role">Strength & Conditioning Coach</p>
            <p class="trainer-bio">
                Former competitive bodybuilder with deep understanding of form, muscle isolation 
                and progressive strength training. Focuses on building real power with clean technique.
            </p>
        </div>

        <!-- Trainer 2 -->
        <div class="col-md-3 trainer-card text-center">
            <img src="images/coach2.png" class="trainer-img">
            <h5 class="trainer-name">Sumit Tiwari</h5>
            <p class="trainer-role">CrossFit & Functional Training Specialist</p>
            <p class="trainer-bio">
                Energetic and motivational. Expert in mobility training, HIIT, endurance and full-body 
                transformation workouts. Believes in discipline and consistency.
            </p>
        </div>

        <!-- Trainer 3 (Female) -->
        <div class="col-md-3 trainer-card text-center">
            <img src="images/coach4.png" class="trainer-img">
            <h5 class="trainer-name" >Navjot Kaur</h5>
            <p class="trainer-role">Female Personal Fitness Coach</p>
            <p class="trainer-bio">
                Certified female trainer specializing in toning, strength training and core stability. 
                Encourages women to train with confidence and build healthy lifestyle habits.
            </p>
        </div>

        <!-- Trainer 4 -->
        <div class="col-md-3 trainer-card text-center">
            <img src="images/coach3.png" class="trainer-img">
            <h5 class="trainer-name">Amarveer Sandhu</h5>
            <p class="trainer-role">Form & Muscle Building Expert</p>
            <p class="trainer-bio">
                Focuses on form correction and safe progression. Known for helping beginners overcome 
                hesitation and develop strong workout habits.
            </p>
        </div>

    </div>
</div>


    <div class="container-fluid bg-dark">
        <div class="row">
            <p class="text-center text-white" style="font-size:1rem;padding-top:20px;">Start Your</p>
            <h1 class="text-center text-white" style="padding-bottom:20px;">Training Today</h1>
            <a href="joinMember.php" class="text-center pb-3"><button type="button" class="btn btn-outline-warning">Click here to Enquiry</button></a>
        </div>
    </div>
    <br>
    <br>
    <section class="about-section container py-5">

    <div class="text-center mb-4">
        <img src="images/second.jpg" class="img-fluid rounded shadow-sm" style="max-width: 500px;" alt="Gym Image">
    </div>

    <div class="text-center">
        <h2 class="about-title mb-3">About Us</h2>
        <p class="about-text px-md-5">
            Iron Can’s Gym in Jalandhar stands for commitment, discipline and strength.
            Our training programs focus on building real stamina, muscle endurance and overall fitness.
            We believe fitness is not only about lifting weights, but lifting your mindset higher.
            Our trainers guide you with proper form, personalized routines and diet support so that each
            step of your fitness journey becomes meaningful and effective.
        </p>

        <a href="aboutus.php" class="btn btn-primary px-4 py-2 mt-3">Know More</a>
    </div>

</section>


    <div class="container-fluid mt-5">
        <div class="row">


            <div class="img mt-5">
                <div class="rt-bmi-calculator rt-dark ">
                    <div class="row g-4">
                        <div class="col-md-7  mb-4">
                            <div class="rt-left">
                                <h3 class="rt-title">CALCULATE YOUR BMI</h3>
                                <div class="rt-subtitle">BMI is a measurement of a person's leanness or corpulence based on their height and weight, and is intended to quantify tissue mass. It is widely used as a general indicator of whether a person has a healthy body weight for their height. Specifically, the value obtained from the calculation of BMI is used to categorize whether a person is underweight, normal weight, overweight, or obese depending on what range the value falls between.</div>
                                <form class="rt-bmi-form">
                                    <div class="rt-bmi-radio">
                                        <input id="rt-bmi-metric-2016876180" type="radio" name="rt-bmi-unit" value="metric" checked=""><label for="rt-bmi-metric-2016876180">Metric Units</label><input id="rt-bmi-imperial-2016876180" type="radio" name="rt-bmi-unit" value="imperial"><label for="rt-bmi-imperial-2016876180">Imperial Units</label>
                                    </div>
                                    <div class="rt-bmi-fields">
                                        <input type="text" class="mt-5 rt-bmi-fields-metric" name="rt-bmi-weight" placeholder="Weight / kg">
                                        <input type="text" class="rt-bmi-fields-metric" name="rt-bmi-height" placeholder="Height / cm">
                                        <input type="text" class="rt-bmi-fields-imperial" name="rt-bmi-pound" placeholder="Weight / lbs" style="display:none;">
                                        <input type="text" class="rt-bmi-fields-imperial" name="rt-bmi-feet" placeholder="Height / feet" style="display:none;">
                                        <input type="text" class="rt-bmi-fields-imperial" name="rt-bmi-inch" placeholder="Height / inch" style="display:none;">
                                    </div>
                                    <input type="submit" class="rt-bmi-submit" value="CALCULATE">
                                    <div class="rt-bmi-result" style="display:none;" data-chart="[[&quot;Below 18.5&quot;,&quot;Underweight&quot;],[&quot;18.5 - 24.9&quot;,&quot;Normal&quot;],[&quot;25 - 29.9&quot;,&quot;Overweight&quot;],[&quot;30 and Above&quot;,&quot;Obese&quot;]]">Your BMI is: <span class="rt-bmi-val"></span>, and weight status is: <span class="rt-bmi-status"></span></div>
                                    <div class="rt-bmi-error" data-emptymsg="Error: One or more fields are empty" data-numbermsg="Error: All field values must be a number"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5  mb-4">
                            <div class="rt-right">
                                <table class="bmi-chart table  mt-5 tb">
                                    <tbody>
                                        <tr>
                                            <th>BMI</th>
                                            <th>Weight Status</th>
                                        </tr>
                                        <tr>
                                            <td>Below 18.5</td>
                                            <td>Underweight</td>
                                        </tr>
                                        <tr>
                                            <td>18.5 - 24.9</td>
                                            <td>Normal</td>
                                        </tr>
                                        <tr>
                                            <td>25 - 29.9</td>
                                            <td>Overweight</td>
                                        </tr>
                                        <tr>
                                            <td>30 and Above</td>
                                            <td>Obese</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <br>
        <br>



    </div>

    <section id="testinomial" class="padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="heading">𝕺𝖚𝖗   &nbsp; 𝕳𝖆𝖕𝖕𝖞 &nbsp;   𝕮𝖚𝖘𝖙𝖔𝖒𝖊𝖗𝖘</h2>
            <hr class="heading_space" />
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="testinomial-slider" class="owl-carousel text-center">
              <div class="item">
                <h3>
                 Joined for weight loss, stayed for the energy.
                  Lost 6kg in 2 months. The trainers here actually care.!!
                </h3>
                <p>Aman Sharma</p>
              </div>
              <div class="item">
                <h3>
                  Ladies friendly gym & respectful environment. Trainer guidance is top-notch  
                </h3>
                <p>Gurpreet Kaur</p>
              </div>
              <div class="item">
                <h3>
                  Was struggling with consistency. Here the motivation just feels natural. Love this gym!
                </h3>
                <p>Vikram Thakur</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php require 'blad/footer.php'; ?>




<script>
document.querySelector(".rt-bmi-form").addEventListener("submit", function(e) {
    e.preventDefault();

    let weight = document.querySelector("input[name='rt-bmi-weight']").value;
    let height = document.querySelector("input[name='rt-bmi-height']").value;

    if (!weight || !height || isNaN(weight) || isNaN(height)) {
        alert("Please enter valid numeric values.");
        return;
    }

    height = height / 100; // Convert cm to meters
    let bmi = (weight / (height * height)).toFixed(1);

    let status = "";
    if (bmi < 18.5) status = "Underweight";
    else if (bmi < 25) status = "Normal";
    else if (bmi < 30) status = "Overweight";
    else status = "Obese";

    document.querySelector(".rt-bmi-result").style.display = "block";
    document.querySelector(".rt-bmi-val").textContent = bmi;
    document.querySelector(".rt-bmi-status").textContent = status;
});

  $("#testinomial-slider").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    dots: true,
    nav: false,
    smartSpeed: 800,
  });


</script>


</body>

</html>