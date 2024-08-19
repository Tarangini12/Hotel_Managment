<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <title>Aether</title>


</head>

<body>

  <?php
   include("header.php");
   ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/template.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/template.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/customer.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>


  <!--welcome-->

  <div class="welcome">
    <div class="right-left"
      style="display: flex; flex-direction: row;justify-content: space-between; width: 100%; height: 100%; background-size: cover; background-image:  linear-gradient(to left, rgba(255,0,0,0), rgb(255, 255, 255)),url(../images/booking.jpg); padding: 5%;">
      <div class="welcome-container">
        <div class="text-box " style="width: 40%; text-align: center; padding: 5%; ">
          <h1 style=" font-family: 'Dancing Script', cursive; font-size: 4rem; ">
            Welcome To Hotel
          </h1>
          <br>
          <p style="line-height: 30px; font-size: 20px; font-family: 'Indie Flower', cursive; ">Lorem ipsum dolor sit
            amet,
            consectetur adipisicing elit. Quis ab officiis earum nemo rem omnis nam beatae perferendis perspiciatis
            doloremque, aspernatur qui dolorem nihil odio eum, magni ipsa quasi debitis.</p>
        </div>
      </div>
    </div>
  </div>


  <?php
		include("footer.php");
	?>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script>
    window.addEventListener("scroll", function () {
      var header = document.querySelector("nav");
      header.classList.toggle("sticky", window.scrollY > 100);
    });
  </script>
</body>

</html>