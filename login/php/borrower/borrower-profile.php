<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="/consulta/images/zc_seal.png"/>
        <title>Edit Profile | ZC Library</title>
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
            <div>
                <a class="nav-link fw-bold text-light" href="/consulta/login/php/borrower/borrower.php">Home</a>
            </div>
            <div class="container d-flex justify-content-end ">
                <a class="navbar-brand m-0 p-0" href="/consulta/login/php/borrower/borrower-profile.php">
                    <img src="/consulta/images/cataloger.png" alt="Avatar Logo" style="width: 32px; height:32px;" class="rounded-pill"> 
                </a>
                <ul class="nav nav-tabs ms-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" style="background-color: #021631;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Borrower</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/consulta/login/index.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        


        
        <div class="container d-flex rounded bg-white mt-5 mb-5 justify-content-center">
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="" width="150px" src="../reverted_cataloger.png"><span class="font-weight-bold">Borrower</span><span class="text-black-50">borrower@wmsu.com</span><span> </span></div>
                        <div class="row">
                            <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="Name" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Email</label><input type="text" class="form-control" value="" placeholder="Email"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="Password" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Confirm Password</label><input type="text" class="form-control" placeholder="Confirm Password" value=""></div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="float-end fixed-bottom d-flex justify-content-end p-3">
            <a target="_blank" href="https://www.facebook.com/messages/t/558044097602191" >
            <img src="/consulta/login/php/borrower/messenger.png" alt=Facebook Page width="40" height="40">
            </a>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    </body>

</html>