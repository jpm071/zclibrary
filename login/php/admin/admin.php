<!DOCTYPE html>
<html>
   <head>
      <link rel="shortcut icon" href="../zc_seal.png"/>
      <title>Admin Homepage | ZC Library</title>
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
            <a class="navbar-brand m-0 p-0" href="/consulta/login/php/admin/admin-profile.php">
              <img src="/consulta/images/cataloger.png" alt="Avatar Logo" style="width: 32px; height:32px;" class="rounded-pill"> 
            </a>
            <ul class="nav nav-tabs ms-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" style="background-color: #021631;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Admin</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/consulta/login/php/admin/admin-profile.php">Edit Profile</a></li>
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
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>
    </div>
      <br>
      <div class="container">
        <div class="row">
            <a class="col btn" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-3 w-3" style="width: 150px; height:150px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
              <path strokeLinecap="round" strokeLinejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            <br>
              Resources / Collections
            </a>
            <a class="col btn" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-3 w-3" style="width: 150px; height:150px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
              <path strokeLinecap="round" strokeLinejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <br>
              Descriptive Cataloging
            </a>
            <a class="col btn" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-3 w-3" style="width: 150px; height:150px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
              <path strokeLinecap="round" strokeLinejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <br>
              Manage User
            </a>
          </div>
          <br>
          <div class="row">
            <a class="col btn " href="#">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-3 w-3" style="width: 150px; height:150px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
              <path strokeLinecap="round" strokeLinejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <br>
              Library Events
            </a>
            <a class="col btn" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-3 w-6" style="width: 150px; height:150px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
              <path strokeLinecap="round" strokeLinejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
            <br>
              Reports
            </a>
        </div>
      <!--
      <div class = "container d-flex justify-content-around">
          <button type="button" class="btn btn-primary btn-lg">Resources / Collections</button>
          <button type="button" class="btn btn-primary btn-lg">Descriptive Cataloging</button>
          <button type="button" class="btn btn-primary btn-lg">Manage User</button>
      </div>
      <br>
      <div class = "container d-flex justify-content-around">
          <button type="button" class="btn btn-primary btn-lg">Library Events</button>
          <button type="button" class="btn btn-primary btn-lg">Reports</button>
      </div>
      <br>
    </div>
    -->




   </body>
</html>