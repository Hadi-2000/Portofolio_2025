<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../komponen/CSS/cssMain.css">
  </head>
  <body>
   <!--Navbar-->
    <nav class="navbar bg-secondary">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="../index.php">Hadi Wicaksono</a>
        <div>
          <button class="btn" type="submit"><a class="text-decoration-none nav-link" href="projects.php">Projects</a></button>
          <button class="btn" type="submit"><a class="text-decoration-none nav-link" href="aboutme.php">About Me</a></button>
          <button class="btn" type="submit"><a class="text-decoration-none nav-link" href="contact.php">Contact</a></button>
          <button class="btn" type="submit"><a class="text-decoration-none nav-link" >Change Theme</a></button>
        </div>
      </div>
    </nav>
    <!--Navbar-->
    <!--Container-->
    <div class="m-5">
        <h3 class="text-center">Contact Details</h3>
        <div class="m-4"></div>
      <div class="d-inline">
        <img class="m-2" src="../komponen/images/logo/geo-alt-fill.svg" width="20px" height="20px" alt="location">
        <label>Kabupaten Tangerang, Banten, Indonesia</label>
      </div>
      <div></div>
      <div class="d-inline">
        <img class="m-2" src="../komponen/images/logo/envelope-fill.svg" width="20px" height="20px" alt="location">
        <label>hadiwcreate5@gmail.com</label>
      </div>
      <div></div>
      <div class="d-inline">
        <img class="m-2" src="../komponen/images/logo/telephone-fill.svg" width="20px" height="20px" alt="location">
        <label>+62821-3552-5209</label>
      </div>
    </div>
       
  

    <form class="bg-light m-5">
      <div class="mb-3">
        <h4 class="text-center">Contact Form</h4>
          <label for="exampleInputName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Your Name">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Your Email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputSubject" class="form-label">Subject</label>
      </div>
      <div class="mb-3">
        <textarea class="" id="comment" name="comment" rows="4" cols="50" placeholder="Tulis subject disini..."></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
    <!--Container-->
    
    <!--Footer-->
    <hr class="mb-4">
    <h5 class="text-center mb-2">Follow Me</h5>
    <div class="container w-100">
      <div class="row">
        <div class="col-md-4">
          <a href="#"><img class="rounded mx-auto d-block img-fluid" src="../komponen/images/logo/globe.svg" width="20px" height="20px" alt="internet"></a>
        </div>
        <div class="col-md-4">
          <a href="https://github.com/Hadi-2000"><img class="rounded mx-auto d-block img-fluid" src="../komponen/images/logo/github.svg" width="20px" height="20px" alt="github"></a>
        </div>
        <div class="col-md-4">
          <a href="https://www.instagram.com/Hadiwicaksono04"><img class="rounded mx-auto d-block img-fluid" src="../komponen/images/logo/instagram.svg" width="20px" height="20px" alt="instagram"></a>
        </div>
      </div>
      <div class="m-5">
        <p class="text-center">@ 2025 Hadi Wicaksono. Portofolio</p>
      </div>
    </div>
    
    <!--Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 