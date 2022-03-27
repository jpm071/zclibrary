<?php 
   session_start();
?>
<!DOCTYPE html>
<html>
  <head>
      <link rel="shortcut icon" href="../zc_seal.png"/>
      <title>New password</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
      </script>
  </head>
  <body>
      <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
      	<form class="border shadow p-3 mt-5 rounded" action="change_pass.php" method="POST" style="width: 450px;">
			    <h1 class="text-center p-3">Create New Password</h1>
				    
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">New Password</label>
		    <input type="password" 
		           class="form-control" 
		           name="password" 
		           id="password"
				   required>
		  </div>

		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Confirm New Password</label>
		    <input type="password" 
		           name="password-rep" 
		           class="form-control" 
		           id="password-rep"
				   required>
		  </div>
      
      <p style="text-align: center;">
        Don't have an account? <a href="../volunteer/volunteer.php">Sign Up.</a> 
      </p>

      <br>

      <p style="text-align: center;">
      <a href="../index.php">Go back to login page</a> 
      </p>
		 
		  <div style="text-align: center;">
				<button type="submit"
					class="btn btn-primary justify-content-center" name="reset-submit" id="reset-submit">Reset
        </button>
			</div>

			</form>
      </div>


      
      <script src="js/sweetalert.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>