<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Iron Can’s Gym</title>

    <!-- Bootstrap & Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="blad/css/contactus.css">
    <!-- Custom CSS -->
    <style>
        .hero-section {
            background: url('images/gym_cover.jpg') center/cover no-repeat;
            height: 45vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align:center;
            color: white;
            font-weight: bold;
            background-attachment: fixed;
            backdrop-filter: brightness(0.4);
        }

        .hero-section h1 {
            font-size: 3rem;
            letter-spacing: 2px;
            text-shadow: 0px 4px 12px rgba(0,0,0,0.7);
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.7rem;
            color: #444;
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 15px;
        }

        .map-container {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
    </style>

    <?php include 'blad/header.php'; ?>
</head>
<body>

<?php include 'blad/navbar.php'; ?>

<!-- HERO SECTION -->
<!-- HERO SECTION -->
<section class="about-hero d-flex align-items-center">
  <div class="container text-center text-light">
    <h1 class="display-4 fw-bold">About Iron Can’s Gym</h1>
    <p class="lead mt-2">Strength • Discipline • Consistency • Growth</p>
  </div>
</section>


<!-- ABOUT SECTION -->
<section class="container py-5">
    <div class="row align-items-center">

        <div class="col-md-8">
            <h1 class="section-title mb-3" style="font-weight:700;">Who We Are</h1>

            <p class="about-text" style="line-height:1.8; font-size:1.05rem;">
                <strong>Iron Can’s Gym</strong> is more than just a place to work out — 
                it is a space built on discipline, dedication and growth. 
                Our training philosophy is simple: 
                <strong>be consistent, stay committed, and progress every single day.</strong>  
                <br><br>
                We aim to transform lives by helping individuals build strength not only in their bodies, 
                but also in their mindset. Whether you are stepping into the gym for the first time or 
                continuing your advanced fitness journey, we ensure you get the right guidance, motivation, 
                and a supportive training atmosphere.
            </p>

            <h5 class="mt-4 mb-2" style="font-weight:600;">What We Offer:</h5>
            <ul style="line-height:1.8; font-size:1rem;">
                <li>Professional & Certified Trainers Focused on Form and Safety</li>
                <li>Personal Coaching with Customized Workout and Diet Plans</li>
                <li>Strength Training, CrossFit, Functional Workouts & Cardio Routines</li>
                <li>Dedicated Weight Loss and Muscle Building Support Programs</li>
                <li>Modern Equipment and a Positive Gym Culture to Grow Consistently</li>
            </ul>

            <p class="mt-3" style="font-size:1.05rem;">
                Here, we push limits —  
                <strong>not to exhaust you, but to evolve you.</strong>  
                Your fitness journey is personal, and at Iron Can’s Gym, we make sure it becomes meaningful, powerful, and lifelong.
            </p>
        </div>

        <div class="col-md-4 text-center">
            <img src="images/gym1.png" class="img-fluid rounded shadow-sm" alt="Gym Trainer" style="border-radius:12px;">
        </div>

    </div>
</section>


<!-- LOCATION SECTION -->
<!-- LOCATION SECTION -->
<section class="container py-5">
    <h3 class="section-title text-center">Our Location</h3>
    <p class="text-center mb-4" style="color:#444; font-size:1rem;">
        Visit us at our gym facility and start your transformation journey.
    </p>

    <!-- Address Details -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="background:##2C2C2C; padding:20px; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08);">
                <p style="margin:0; font-size:1.05rem; line-height:1.7rem;">
                    <strong>Address:</strong> SCO-19/20, Near UCO Bank, Guru Gobind Singh Avenue, Jalandhar, Punjab <br><br>
                    <strong>Phone:</strong> +91-99880-48800 <br>
                    <strong>Email:</strong> ironcansgym@gmail.com
                </p>
            </div>
        </div>
    </div>
<!-- GOOGLE MAP FULL WIDTH -->
<div class="gym-map-section">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3407.9142567226186!2d75.6087177!3d31.333741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5b5b3cdea705%3A0xade42bd1a36bd476!2sIron%20Can&#39;s%20gym%20%7C%20Best%20Gym%20In%20Jalandhar%20%7C%20Luxury%20Gym!5e0!3m2!1sen!2sin!4v1762683489328!5m2!1sen!2sin"
    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

</section>


<!-- FEEDBACK FORM (unchanged) -->
<!-- SEND MESSAGE / FEEDBACK SECTION -->
<section class="container py-5">
    <h3 class="section-title text-center mb-4" style="font-weight:700;">Send Us a Message</h3>

    <div class="message-box mx-auto p-4">

        <form action="" method="POST" onsubmit="return feedbackValidation()">

            <div class="form-group mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>

            <div class="form-group mb-3">
                <label>Contact</label>
                <input type="tel" class="form-control" name="phone" placeholder="Enter phone number">
            </div>

            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>

            <div class="form-group mb-3">
                <label>Your Message</label>
                <textarea class="form-control" name="feedback" rows="5" placeholder="Write your message"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-dark w-100">Send Message</button>
        </form>

    </div>
</section>


<?php include 'blad/footer.php'; ?>

</body>
</html>
