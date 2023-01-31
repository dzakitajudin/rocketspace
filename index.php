<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Rocket Space</title>
	<meta name="author" content="Dzaki Tajudin" />
	<meta name="description" content="Rocket Space" />
	<meta name="Resource-type" content="Document" />
    <link rel="shortcut icon" href="./assets/img/favicon.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- External Custom CSS -->
    <link rel="stylesheet" href="./assets/css/signin.css">

    <title>Rocket Space</title>
    </head>
    <body>
    <main>
        <!-- ==================== ALERT SUCCESS ======================================= -->
        <div class="alert alert-success loginSuccess" role="alert" id="loginSuccess" style="display: none">
            Login Success!
        </div>
        <!-- <div class="container-fluid"> -->
        <div class="row">
            <div class="col-sm-6 login-section-wrapper">
            <div class="brand-wrapper">
                <img src="./assets/img/rocketspace_logo_kecil.png" alt="logo" height="60">
                    <a href="./index.php" class="logo">
                        Rocket Space
                    </a>
            </div>
            <div class="login-wrapper my-auto">
                <h1 class="login-title">Login</h1>
                <form method="post">
                <div class="form-group">
                    <label for="email">Employee ID</label>
                    <input type="text" name="employeeid" id="employeeid" class="form-control" placeholder="enter your employee id">
                </div>
                <div class="form-group mb-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
                </div>
                <input name="login" id="login" class="btn btn-block login-btn" type="button" value="Login" onClick="return check_login();">
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-wrapper-footer-text">Don't have an account? <a href="./function/register.php" class="text-reset">Sign Up</a></p>
            </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="./assets/img/login_rocketspace.png" alt="login image" class="login-img">
            </div>
        </div>
        <!-- Footer Section -->
        <footer>
            <div class="container">
                <div class="row vcenter">
                    <div class="copyright">
                        <p class="text-footer">Copyright &copy;<?php echo date("Y"); ?></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- </div> -->

        <!-- ==================== MODAL LOGIN ERROR ======================================= -->

        <!-- Employee ID required -->
        <div class="modal fade" id="modal-login-employeeid-required" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Employee ID is required</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Password required -->
        <div class="modal fade" id="modal-login-password-required" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Password is required</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Password not match -->
        <div class="modal fade" id="modal-password-notmatch" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Password not match</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Employee ID does not exist -->
        <div class="modal fade" id="modal-employeeid-notexist" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Employee ID does not exist</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

    </main>
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <!-- External Js -->
        <script src="./assets/js/signin.js"></script>
    </body>
</html>