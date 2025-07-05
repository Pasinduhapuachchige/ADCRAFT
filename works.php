<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Works</title>
  <link rel="stylesheet" href="work.css">

</head>
<body>
    <!-- Header and Navigation Section -->
    <section id="header-login">
        <div class="container">
         <nav>
             <div class="logo"><h1>ADCRAFT</h1></div>
             <ul class="nav-links">
                <!-- Navigation Links -->
                <li><a href="Home1.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="Service/service.php">Service</a></li>
                <li><a href="crud/add_new.php">Contact</a></li>
                <li><a href="carrer/index1.php">Career</a></li>
                <li><a href="php/logout.php"><b>Logout</b></a></li>
             </ul>
             <!-- Mobile Menu Button -->
             <div class="menu-btn"><img src="./img/menu.svg" alt=""></div>
         </nav>
 
        </div>
     </section>
  <!-- Header Section -->
  <header>
    <h1>Our Works</h1>
  </header>

  <!-- Gallery Section -->
  <div class="gallery">
    <!-- Work 1 -->
    <div class="work" onclick="redirectToWorkDescriptionPage('work1')">
      <img src="img/lifebuoy.jpg" alt="Work 1">
      <div class="work-details">
        <h2>LifeBouy</h2>
        <p>Project Lifebouy</p>
      </div>
    </div>

    <!-- Work 2 -->
    <div class="work" onclick="redirectToWorkDescriptionPage('work2')">
      <img src="img/Dettol_ASL_1L_Packshot.webp" alt="Work 2">
      <div class="work-details">
        <h2>Dettol</h2>
        <p>Project Dettol</p>
      </div>
    </div>

    <!-- Work 3 -->
    <div class="work" onclick="redirectToWorkDescriptionPage('work3')">
      <img src="img/Hair-Fall-Care-Bundle_1.webp" alt="Work 3">
      <div class="work-details">
        <h2>Janet</h2>
        <p>Project Janet</p>
      </div>
    </div>

    <!-- Work 4 -->
    <div class="work" onclick="redirectToWorkDescriptionPage('work4')">
      <img src="img/coca.png" alt="Work 4">
      <div class="work-details">
        <h2>Project Coca-Cola</h2>
        <p>Project Coca-Cola</p>
      </div>
    </div>

    <!-- Work 5 -->
    <div class="work">
      <img src="img/EGB.jpg" alt="Work 5">
      <div class="work-details">
        <h2>EGB</h2>
        <p>Intro Video design</p>
      </div>
    </div>

    <!-- Work 6 -->
    <div class="work">
      <img src="img/nolimit.png" alt="Work 6">
      <div class="work-details">
        <h2>Nolimit</h2>
        <p>Banner Design</p>
      </div>
    </div>

    <!-- Work 7 -->
    <div class="work" >
      <img src="img/signal.jpg" alt="Work 7">
      <div class="work-details">
        <h2>Signal Toothpaste</h2>
        <p>Banner Design</p>
      </div>
    </div>

    <!-- Work 8 -->
    <div class="work" >
      <img src="img/61W+6vuElKL.jpg" alt="Work 8">
      <div class="work-details">
        <h2>Center Fresh</h2>
        <p>Cover design</p>
      </div>
    </div>

  </div>
 
  <!-- Footer Section -->
<footer style="display: flex; flex-direction: column; align-items: center;">
    <!-- Footer Links -->
    <ul class="footerlinks">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <p>
       @2024 AdCraft. All right reserved. 
    </p>
</footer>


  <!-- JavaScript for redirecting to work description page -->
  <script>
    function redirectToWorkDescriptionPage(workId) {
      window.location.href ='work details/' + workId + '_des.html';
    }
  </script>

</body>
</html>
