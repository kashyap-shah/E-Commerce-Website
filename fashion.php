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
$number = $_POST['number'];
$email = $_POST['email'];
$p_name = "BEAUTY & FASHION | ".$_POST['p_name'];


//inserting values in data 
$sql = "INSERT INTO enquirytable(p_name, name, email, number) VALUES ('$p_name','$name','$email','$number')";

	if (mysqli_query($mysqli, $sql)) 
	{
		echo '<script>alert("Thanks for your Enquiry!")</script>';
	} 
	else 
	{
		echo "Error: " . $sql . mysqli_error($mysqli);
	}
}?>
<html>
<head>
  <title>FASHION | KaShop</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
  <link rel = "icon" type = "image/png" href = "images/icon.png"><!--TITLE ICON-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"><!--NAVBAR-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--SOCIAL ICONS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!--NAVBAR-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script><!--NAVBAR-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script><!--NAVBAR-->
	
	<script>
                function openForm(a) {
				var a;
                  document.getElementById(""+a).style.display = "block";
                }

                function closeForm(b) {
				var b;
                  document.getElementById(""+b).style.display = "none";
                }
  </script>
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
        <a class="dropdown-item" href="fashion.php">Beauty & Fashion</a>
        <a class="dropdown-item" href="grains.php">Grains & Lentils</a>
		<a class="dropdown-item" href="sports.php">Sports</a>
		<a class="dropdown-item" href="fruits.php">Fruits & Vegetables</a>
		<a class="dropdown-item" href="mobile.php">Mobile Accessories</a>
		<a class="dropdown-item" href="laptop.php">Laptop Accessories</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="fashion.php#about">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
  </ul>
</nav>
</div>

<!--ITEMS-->
<div class="products" id="products">
<br><br>
<h2><center>&#9734;-----BEAUTY & FASHION ITEMS-----&#9734;</center></h2>
<section class="items" style="display: inline;">
    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/alarm clock.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Alarm clock</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm')">ENQUIRY</button>
        <div class="form-popup" id="myForm">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Alarm clock" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/blue dress.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Blue dress</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm1')">ENQUIRY</button>
        <div class="form-popup" id="myForm1">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Blue dress" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm1')">Close</button>
                  </form>
                </div>
			</div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/brown heel.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Brown heel</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm2')">ENQUIRY</button>
        <div class="form-popup" id="myForm2">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Brown heel" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm2')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/converse all star shoe.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Converse all star shoe</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm3')">ENQUIRY</button>
        <div class="form-popup" id="myForm3">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Converse all star shoe" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm3')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/cosmetic combo.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Cosmetic combo</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm4')">ENQUIRY</button>
        <div class="form-popup" id="myForm4">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Cosmetic combo" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm4')">Close</button>
                  </form>
                </div>
			</div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/daniel wellington watch.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Daniel wellington watch</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm5')">ENQUIRY</button>
        <div class="form-popup" id="myForm5">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Daniel wellington watch" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm5')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/denim shirt.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Ladies denim shirt</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm6')">ENQUIRY</button>
        <div class="form-popup" id="myForm6">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Ladies denim shirt" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm6')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/flower bracelet.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Flower bracelet</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm7')">ENQUIRY</button>
        <div class="form-popup" id="myForm7">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Flower bracelet" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm7')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/honest assorted cream bottles combo.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Honest assorted cream bottles combo</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm8')">ENQUIRY</button>
        <div class="form-popup" id="myForm8">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Honest assorted cream bottles combo" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm8')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/honest beauty mascaras.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Honest beauty mascaras</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm9')">ENQUIRY</button>
        <div class="form-popup" id="myForm9">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Honest beauty mascaras" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm9')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/ladies denim shorts.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Ladies denim shorts</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm10')">ENQUIRY</button>
        <div class="form-popup" id="myForm10">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Ladies denim shorts" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm10')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/lipstick combo.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Lipstick combo</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm11')">ENQUIRY</button>
        <div class="form-popup" id="myForm11">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Lipstick combo" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm11')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/nike originals.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Nike originals</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm12')">ENQUIRY</button>
        <div class="form-popup" id="myForm12">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Nike originals" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm12')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

<article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/rayban round spec.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Rayban round spec</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm13')">ENQUIRY</button>
        <div class="form-popup" id="myForm13">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Rayban round spec" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm13')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

<article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/smartwatch a5.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Smartwatch a5</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm14')">ENQUIRY</button>
        <div class="form-popup" id="myForm14">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Smartwatch a5" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm14')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

<article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/white jeans for women.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">White jeans for women</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm15')">ENQUIRY</button>
        <div class="form-popup" id="myForm15">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="White jeans for women" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm15')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

<article class="items-section">
      <div class="items-flip-card">
        <div class="items-flip-card-inner">
          <div class="items-flip-card-front">
            <img src="fashion/winter cape.jpg" alt="Avatar" class="items-image">
          </div>
          <div class="items-flip-card-back">
            <div class="items-text"><p class="items-text-title">Winter cape</p>
              <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                dolores.
              </p>
			  <button class="enquiry-button" onclick="openForm('myForm16')">ENQUIRY</button>
        <div class="form-popup" id="myForm16">
                  <form action="" method="post" class="form-container">
                    <h3>ENQUIRY</h3>
                    <h6 style="color:#000">Product:<input type="text" name="p_name" id="p_name" value="Winter cape" readonly></h6>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
					<input type="email" placeholder="Enter your Mail ID" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <input type="tel" placeholder="Enter Your Mobile Number" name="number" id="number" required>

                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm16')">Close</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <div style="clear: both;"></div>
  </section>
  <br>
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
