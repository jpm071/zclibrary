<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="../zc_seal.png"/>
      <title>User Management | ZC Library</title>
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
            <div class="container-fluid d-flex justify-content-end">
                <a class="navbar-brand m-0 p-0" href="./admin-profile.php">
                    <img src="./images/cataloger.png" alt="Avatar Logo" style="width: 32px; height:32px;" class="rounded-pill"> 
                </a>
                <ul class="nav nav-tabs">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" style="background-color: #021631;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Admin</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./admin-profile.php">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="/consulta/login/index.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <br>
        <br>
        <br>

        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./home.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Manage User</li>
            </ol>
          </nav>
        </div>
          <br>

        <div class="container mt-2 pt-2">
        <input class="form-control" id="myInput" type="text" placeholder="Search...">
        <br>
        <table class="table table-hover table-bordered table-striped table-responsive">
          <thead>
            <tr>
              <th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>User Type</th>
              </th> 
            </tr>
          </thead>
          <tbody id="myTable">
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                </div>
              </th>
              <td>Name 1</td>
              <td>E-mail 1</td>
              <td>Password 1</td>
              <td>User Type 1</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                </div>
              </th>
              <td>Name 2</td>
              <td>E-mail 2</td>
              <td>Password 2</td>
              <td>User Type 2</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                </div>
              </th>
              <td>Name 3</td>
              <td>E-mail 3</td>
              <td>Password 3</td>
              <td>User Type 3</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                </div>
              </th>
              <td>Name 4</td>
              <td>E-mail 4</td>
              <td>Password 4</td>
              <td>User Type 4</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                </div>
              </th>
              <td>Name 5</td>
              <td>E-mail 5</td>
              <td>Password 5</td>
              <td>User Type 5</td>
            </tr>
          </tbody>
        </table>
        <div>
          <div class="text-center">
            <button class="btn btn-primary" type="submit">New Account</button>
            <button class="btn btn-primary" type="submit">Edit</button>
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-danger" type="submit">Delete</button>
          </div>
        </div>
      </div>

      <script>
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
      </script>

       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

  </html>