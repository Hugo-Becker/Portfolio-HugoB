<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio#1</title>
    <link rel="stylesheet" href="./public/css/app.css">
    <!-- <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

</head> 
 <!-- HEADER -->
<body >
 
<!-- NAVBAR -->

<nav class="navbar  navbar-expand-lg navbar-light sticky-top pl-5  p-0">
    <!-- BUTTON COLLAPSE -->
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navList">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="">
      <i class="fab fa-artstation" style="color: black;"></i>
    </a>
    <span class="navbar-text mr-3"style="color: black;"">
      Aeroby
    </span>

    <div class="collapse navbar-collapse" id="navList">
      <!-- BRAND --> 
      
      <!-- LISTE -->
      
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" data-target="#dropdown_target" href="#">Home</a>
            <!-- dropdown -->
            <div class="dropdown-menu" aria-labelledby="dropdown_target" >
              <a class="dropdown-item" href="./index.html">Home Main</a>
              <a class="dropdown-item" href="./designerPortfolio.html">Designer Portfolio</a>
            </div>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" data-target="dropdown_target2" href="#">Pages</a>
            <div class="dropdown-menu" aria-labelledby="dropdown_target2" >
              <a class="dropdown-item" href="aboutUs.html">About Us</a>
              <a class="dropdown-item" href="./contact.php">Contact Us</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Shop</a>
          </li>

        </ul>
    </div>
  </nav>
  <main>
    <h1>Contact Us</h1>
    <form class="contact-form" action="contactform.php" method="post">
      <input type="text" type="name" placeholder="Full Name">
      <input type="text" type="mail" placeholder="Your E-mail">
      <input type="text" type="subject" placeholder="Subject">
      <textarea name="message" placeholder="Message"></textarea>
      <button type="submit"  name="submit">Send Mail</button>
    </form>
  </main>


  

  




  <footer id="footerTrigg" class="" style="position: relative; z-index: 10;">
    <div id="insideFooter" class="d-flex flex-column footer">
      <h2>Lets work together </h2>
      <a href="mailto:becker.hugo@hotmail.com">
        <h3>Email</h3>
      </a>
    

      <div class=" row d-flex justify-content-around">
        <div class="col-3">
          <a href="">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
        <div class="col-3">
          <a href="">
            <i class="fab fa-twitter"></i>
          </a>

        </div>
        <div class="col-3">
          <a href="">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>

      </div>
      


      

   </div>
  </footer>





   



  


   

    
    





 <!-- MY JS -->
 <script src="./js/main.js"></script>
 <!-- JQUERY -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <!-- BOOTSTRAP -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <!-- AOS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
 <script>
  AOS.init();
</script>



</body>
</html>