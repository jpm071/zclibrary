<!DOCTYPE html>
<html>
  <head>
      <link rel="shortcut icon" href="./images/zc_seal.png"/>
      <title>Borrower | ZC Library</title>
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
          <div class="container-fluid d-flex justify-content-end ">
            <a class="navbar-brand m-0 p-0" href="borrower-profile.php">
              <img src="./images/cataloger.png" alt="Avatar Logo" style="width: 32px; height:32px;" class="rounded-pill"> 
            </a>
            <ul class="nav nav-tabs ms-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" style="background-color: #021631;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Borrower</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="borrower-profile.php">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="../../index.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </nav>

        <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-center fw-bold fs-2">
          <p>Reserve a Book</p>
        </div>
        <input class="form-control mt-2" id="myInput" type="text" placeholder="Search...">
        <br>
        <table class="table table-hover table-bordered table-striped table-responsive">
          <thead>
            <tr>
              <th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Source</th>
                <th>Subject</th>
                <th>Section</th>
                <th>Publisher</th>
                <th>ISBN</th>
                <th>Place of Publication</th>
                <th>Copyright</th>
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
              <td>Title 1</td>
              <td>Author 1</td>
              <td>Source 1</td>
              <td>Subject 1</td>
              <td>Section 1</td>
              <td>Publisher 1</td>
              <td>ISBN 1</td>
              <td>PoB 1</td>
              <td>Copyright 1</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                </div>
              </th>
              <td>Title 2</td>
              <td>Author 2</td>
              <td>Source 2</td>
              <td>Subject 2</td>
              <td>Section 2</td>
              <td>Publisher 2</td>
              <td>ISBN 2</td>
              <td>PoB 2</td>
              <td>Copyright 2</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                </div>
              </th>
              <td>Title 3</td>
              <td>Author 3</td>
              <td>Source 3</td>
              <td>Subject 3</td>
              <td>Section 3</td>
              <td>Publisher 3</td>
              <td>ISBN 3</td>
              <td>PoB 3</td>
              <td>Copyright 3</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                </div>
              </th>
              <td>Title 4</td>
              <td>Author 4</td>
              <td>Source 4</td>
              <td>Subject 4</td>
              <td>Section 4</td>
              <td>Publisher 4</td>
              <td>ISBN 4</td>
              <td>PoB 4</td>
              <td>Copyright 4</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                </div>
              </th>
              <td>Title 5</td>
              <td>Author 5</td>
              <td>Source 5</td>
              <td>Subject 5</td>
              <td>Section 5</td>
              <td>Publisher 5</td>
              <td>ISBN 5</td>
              <td>PoB 5</td>
              <td>Copyright 5</td>
            </tr>
          </tbody>
        </table>
        <div>
          <div class="text-center">
            <button class="btn btn-primary" type="submit">Reserve</button>
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

      <div class="float-end fixed-bottom d-flex justify-content-end p-3">
        <a target="_blank" href="https://www.facebook.com/messages/t/558044097602191" >
          <img src="messenger.png" alt=Facebook Page width="40" height="40">
        </a>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

  </html>