<!DOCTYPE html>
<html>

<head>
  <title>Core Memories</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet">
  <link href="assets/images/icoPage.ico" rel="icon" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      background-image: url('assets/images/bg2.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    img {
      margin-bottom: -7px
    }

    #toggleButton:hover,
    #islandsButton:hover {
      background-color: #FF5B8D !important;
      color: black !important;
    }

    .core-memories-title {
      color: white;
      font-family: 'Slackey', sans-serif;
      font-size: 5vw;
      text-align: center;
      margin-top: 50px;
      margin-bottom: 20px;
    }

    @media screen and (max-width: 768px) {
      .core-memories-title {
        font-size: 8vw;
      }
    }

    @media screen and (max-width: 480px) {
      .core-memories-title {
        font-size: 12vw;
      }
    }
  </style>

</head>

<body>

  <!-- !PAGE CONTENT! -->
  <div class="w3-content" style="max-width:1500px">

    <!-- Header -->
    <div class="w3-opacity">
      <div class="w3-clear"></div>
      <header class="w3-center w3-margin-bottom" style="margin-top: 50px;">
        <h1 class="core-memories-title">
          <b>CORE MEMORIES</b>
        </h1>
        <button id="toggleButton" class="w3-button w3-black" style="border-radius: 30px;" onclick="myFunction()">Toggle
          Grid Padding</button>
        <a href="islands.php">
          <button id="islandsButton" class="w3-button w3-black" style="border-radius: 30px;">See Islands</button>
        </a>
      </header>
    </div>


    <!-- Photo Grid -->
    <div class="w3-row" id="myGrid" style="margin-bottom:128px">
      <div class="w3-third">
        <img src="assets/images/cm1.jpg" style="width:100%">
        <img src="assets/images/cm6.jpg" style="width:100%">
        <img src="assets/images/cm3.jpg" style="width:100%">
        <img src="assets/images/cm10.jpg" style="width:100%">
        <img src="assets/images/cm13.jpg" style="width:100%">
      </div>

      <div class="w3-third">
        <img src="assets/images/cm2.jpg" style="width:100%">
        <img src="assets/images/cm8.jpg" style="width:100%">
        <img src="assets/images/cm7.jpg" style="width:100%">
        <img src="assets/images/cm11.jpg" style="width:100%">
        <img src="assets/images/cm14.jpg" style="width:100%">
        <img src="assets/images/cm16.jpg" style="width:100%">
      </div>

      <div class="w3-third">
        <img src="assets/images/cm4.jpg" style="width:100%">
        <img src="assets/images/cm5.jpg" style="width:100%">
        <img src="assets/images/cm9.jpg" style="width:100%">
        <img src="assets/images/cm2.jpg" style="width:100%">
        <img src="assets/images/cm17.jpg" style="width:100%">
        <img src="assets/images/cm15.jpg" style="width:100%">
      </div>
    </div>

    <!-- End Page Content -->
  </div>

  <footer id="contact-footer" class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge">
    <a href="https://www.facebook.com/yana.abello.2024" target="_blank"
      style="text-decoration: none; display: inline-block; margin: 0 10px;">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
    </a>
    <a href="https://instagram.com/yanaabello" target="_blank"
      style="text-decoration: none; display: inline-block; margin: 0 10px;">
      <i class="fa fa-instagram w3-hover-opacity"></i>
    </a>
    <a href="https://github.com/yanaabello" target="_blank"
      style="text-decoration: none; display: inline-block; margin: 0 10px;">
      <i class="fa fa-github w3-hover-opacity"></i>
    </a>
  </footer>

  <script>
    // Toggle grid padding
    function myFunction() {
      var x = document.getElementById("myGrid");
      if (x.className === "w3-row") {
        x.className = "w3-row-padding";
      } else {
        x.className = x.className.replace("w3-row-padding", "w3-row");
      }
    }

    // Open and close sidebar
    function w3_open() {
      document.getElementById("mySidebar").style.width = "100%";
      document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
    }
  </script>

</body>

</html>