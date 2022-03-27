<?php 
   session_start();
?>
<!DOCTYPE html>
<html>
  <head>
      <link rel="shortcut icon" href="../zc_seal.png"/>
      <title>Login | ZC Library</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
      </script>
  </head>
  <body>
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
            </ul>
          </div>
      </div>
    </nav>

      <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
      	<form class="border shadow p-3 mt-5 rounded" action="php/check-login.php" method="POST" style="width: 450px;">
			    <h1 class="text-center p-3">LOGIN</h1>
				    
            <?php 
              if(isset($_SESSION['e_message'])) {
            ?>

            <div class="alert alert-danger" role="alert">
              <?php
                echo $_SESSION['e_message'];
              ?>
            </div>
					  
            <?php

				    }
				      unset($_SESSION['e_message']);
				    ?>

            <?php 
              if(isset($_SESSION['m_fail'])) {
            ?>

            <div class="alert alert-danger" role="alert">
              <?php
                echo $_SESSION['m_fail'];
              ?>
            </div>
					  
            <?php

				    }
				      unset($_SESSION['m_fail']);
				    ?>

            <?php 
              if(isset($_SESSION['suc_mess'])) {
            ?>

            <div class="alert alert-success" role="alert">
              <?php
                echo $_SESSION['suc_mess'];
              ?>
            </div>
					  
            <?php

				    }
				      unset($_SESSION['suc_mess']);
				    ?>
			

		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">Username</label>
		    <input type="email" 
		           class="form-control" 
		           name="username" 
		           id="username"
				   required>
		  </div>

		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password"
				   required>
		  </div>
	<!--	  <div class="mb-1">
		    <label class="form-label">Select user type:</label>
		  </div>
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option value="borrower">Borrower</option>
			  <option value="cataloger">Cataloger</option>
			  <option value="admin">Admin</option>
		  </select> -->

      
      <p style="text-align: center;">
        Don't have an account? <a href="../volunteer/volunteer.php">Sign Up.</a> 
      </p>
		 
		  <div style="text-align: center;">
				<button type="submit"
					class="btn btn-primary justify-content-center" name="submit" id="login">LOGIN
        </button>
			</div>

			</form>
      </div>


      
      <script src="js/sweetalert.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>