<?php

//making connection with database
	DEFINE('DB_USERNAME', 'root');
	DEFINE('DB_PASSWORD', '');
	DEFINE('DB_HOST', 'localhost:3306');
	DEFINE('DB_DATABASE', 'db');
  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  
  if(isset($_POST["submit"]))
{ 
//getting values from the html input types
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$url = $_POST['url'];
$msg = $_POST['msg'];

//inserting values in data 
$sql = "INSERT INTO contacttable(name, email, number, site, message) VALUES ('$name','$email','$number','$url','$msg')";

	if (mysqli_query($mysqli, $sql)) 
	{
		echo '<script>alert("Thank You For Feedback! We will reply you soon.")</script>';
	} 
	else 
	{
		echo nl2br("\n\nError: " . $sql . mysqli_error($mysqli));
	}
}
?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="stylee.css">
  <link rel = "icon" type = "image/png" href = "images/icon.png"><!--TITLE ICON-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"><!--NAVBAR-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--SOCIAL ICONS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!--NAVBAR-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script><!--NAVBAR-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script><!--NAVBAR-->
</head>
<body>

<!--NAVBAR-->
<div id="navbar">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="home.html"><img src="images/logo.png" width="100px"></a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.html">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Shop</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="ayurvedic.php">Ayurvedic</a>
        <a class="dropdown-item" href="breakfast.php">Breakfast</a>
        <a class="dropdown-item" href="fashion.php">Fashion</a>
        <a class="dropdown-item" href="grains.php">Grains & Lentils</a>
    <a class="dropdown-item" href="sports.php">Sports</a>
    <a class="dropdown-item" href="fruits.php">Fruits & Vegetables</a>
    <a class="dropdown-item" href="mobile.php">Mobile Accessories</a>
    <a class="dropdown-item" href="laaptop.php">Laptop Accessories</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ayurvedic.php#about">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
  </ul>
</nav>
</div>

<!--CONTACT FORM-->
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Quick Contact &#9993;</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input name="name" id="name" placeholder="Your Name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="email" id="email" placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input name="number" id="number" placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input name="url" id="url" placeholder="Your Web Site starts with http://" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea name="msg" id="msg" placeholder="Type your Message Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="submit">Submit</button>
    </fieldset>
  </form>
</div>

<!--ABOUT-->
<div class="about" id="about">
  <br><br><h2><center>Find Us &#128270;</center></h2>

    <section class="about-section-center-clearfix" style="display: inline; ">

      <article class="findUs-map">
      <!--left column-->
      <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29814.98035516466!2d70.3416405285634!3d20.917446907747347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bfd32308996ab5b%3A0xf285471b09bfa777!2sVeraval%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1593443116855!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
      <br><br>
      </article>
      <!-- right column -->
      <article class="findUs-img">
       <!-- second column -->
        <br>
        <!-- section title -->
        <div class="opening-container">
          <div class="opening-text ">
            <h3>O P E N&nbsp;&nbsp;H O U R S &#x23F3;</h3>
              <p>
                <strong>Monday: Closed</strong><br>
                <strong>Tuesday to Friday</strong><br>
                7:00 AM - 9:00 PM<br>
                <strong>Saturday & Sunday</strong><br>
                11:00 AM - 10:00 PM
              </p>
          </div>
        </div>
        
        <!--end section title -->
      </article>
      <div style="clear: both;"></div>
    </section>
    <center>
    <div class="findUs-social">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#" title="Facebook"><i class="fa fa-facebook-official" style="font-size:36px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#" title="Instagram"><i class="fa fa-instagram" style="font-size:36px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#" title="LinkedIn"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#" title="Google"><i class="fa fa-google" style="font-size:36px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#" title="GitHub"><i class="fa fa-github" style="font-size:36px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div><br>
    <h5 class="fontsettings">Copyright © <script>document.write(new Date().getFullYear())</script> | KaShop</h5><br><br>
  </center>
  </div>

</body>
</html>

