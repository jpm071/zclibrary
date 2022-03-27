<!DOCTYPE html>
<html>
   <head>
      <link rel="shortcut icon" href="../zc_seal.png"/>
      <title>Volunteer | ZC Library</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
      </script>
   </head>
   <body >

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #021631;">
      <div class="container-fluid">
        <a href="https://www.facebook.com/Zamboangacitylibrary" class="navbar-brand fw-bold">Zamboanga City Library</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="../" class="nav-link fw-bold">Home</a>
              </li>
              <li class="nav-item">
                <a href="../resources_collections/resources_collections.html" class="nav-link fw-bold">Resources/Collections</a>
              </li>
              <li class="nav-item">
                <a href="../services/services.html" class="nav-link fw-bold">Services</a>
                <li class="nav-item">
                  <a href="../learning_space/learning_space.html" class="nav-link fw-bold">Learning Space</a>
                </li>
                <li class="nav-item">
                  <a href="../activities_events/activities_events.html" class="nav-link fw-bold">Activities/Events</a>
                </li>
                <li class="nav-item">
                  <a href="../volunteer/volunteer.php" class="nav-link fw-bold">Volunteer</a>
                </li>
                <li class="nav-item">
                  <a href="../donate/donate.html" class="nav-link fw-bold">Donate</a>
                </li>
                <li class="nav-item">
                  <a href="../login/index.php" class="nav-link fw-bold">Login</a>
                </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="container">
         <div class="row mt-5 pt-5">
            <div class="col">
               <h2 class="text-black pb-2">Become friends of our library!</h2>
            </div>
         </div>
      </div>
      
      <div class="container">
         <form id="volunteer_form" action="signup.php" method="POST">
          <input type="text" name="usertype" value="borrower" hidden>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Name</label>
                <input type="text" class="form-control" name="name" id="validationDefault01" placeholder="Enter your name here" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">E-mail</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                  </div>
                  <input type="email" class="form-control" name="username" id="validationDefaultUsername" placeholder="Enter your e-mail here" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault03">Password</label>
                <input type="password" class="form-control" name="password" id="validationDefault03" placeholder="Enter your password here" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault04">Confirm Password</label>
                <input type="password" class="form-control" name="rep_password" id="validationDefault04" placeholder="Confirm your password here" required>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  By creating your account, you agree to our
                </label>
                <label class="form-check-label" for="invalidCheck2">
                  <a href="">Terms of Use</a> & <a href="">Privacy Policy</a>
                </label>
              </div>
              <br>
              <button id="btnSubmit" name="submit" class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </form>
      </div>

      <br>
      <br>
      
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script>

    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <br><br><br><br><br>
    <footer
          class="text-center text-lg-start text-black"
          style="background-color: #ffff;"
          >
    <div class="container p-4 pb-0">
      <section class="">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 mb-4">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              FOLLOW US
            </h6>
            <a target="_blank" href="https://www.facebook.com/Zamboangacitylibrary" >
              <img src="./images/facebooklogo.png" alt=Facebook Page width="40" height="40">
           </a>
           <a target="_blank" href="https://www.instagram.com/zambocitygovt/" >
            <img src="./images/instagramlogo.png" alt="Instagram Page" width="40" height="40">
           </a>
          </div>
          
          <hr class="w-100 clearfix d-md-none" />


          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              <a class="text-black" href="https://docs.google.com/document/d/1SVprcKhYQyoQyMJEqFXQE_88NnhzYtF0/edit?fbclid=IwAR2M1sAhgZcYWQupnCL3GkGkPuSMqQow234tHkkCeJoQMkkTEegrrHmCngE">ABOUT US</a>
            </h6>
            <p>
              Mission
            </p>
            <p>
              Vision
            </p>
            <p>
              Organizational Chart
            </p>
          </div>


          <hr class="w-100 clearfix d-md-none" />


          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">CONTACT/ADDRESS</h6>
            <p><i class="fas fa-home mr-3"></i> Justice R.T. Lim Boulevard 7000 Zamboanga City, Philippines</p>
            <p><i class="fas fa-envelope mr-3"></i> Example@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> +63 975 008 1932</p>
          </div>
        </div>
      </section>

      <hr class="my-3">

      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <div class="p-3">
              Developed by: Chimera Tech Solutions
            </div>
          </div>
        </div>
      </section>
    </div>
  </footer>
</div>
   </body>
</html>