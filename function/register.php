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
    <link rel="shortcut icon" href="../assets/img/favicon.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- External Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/signup.css">

    <title>Rocket Space</title>
  </head>
  <body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- <div class="container"> -->
            <!-- Navbar Brand -->
            <img src="../assets/img/rocketspace_logo_kecil.png" alt="logo" height="60">
            <a href="../index.php" class="navbar-brand">
                Rocket Space
            </a>
        <!-- </div> -->
    </nav>
    <!-- </header> -->


    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0" style="position: relative; bottom: 5rem;">
                <img src="../assets/img/registrasi.png" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Create an Account</h1>
                <p class="font-italic text-muted mb-0">create your account for wider access. and let's grow with us for a better future.</p>
                </p>
            </div>

            <!-- Registration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form method="post">
                    <div class="row">

                        <!-- First Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="firstName" type="text" name="firstname" placeholder="First Name" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="lastName" type="text" name="lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-address-card text-muted"></i>
                                </span>
                            </div>
                            <input id="address" type="textarea" name="address" placeholder="Address" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Phone Number -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                                <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                        </div>

                        <div class="input-group col-lg-6 mb-4">
                            <a class="gender" style="color: #6c757d;font-weight: 700;">Gender</a>
                        </div>
                        <div class="input-group col-lg-6 mb-4">
                            <a class="gender" style="color: #6c757d;font-weight: 700;">BirthDate</a>
                        </div>
                        <!-- Gender -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input gender-radio" name="optradio" value="M">
                                        <a class="male" style="color: #6c757d;font-weight: 700;">Male</a>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input gender-radio" name="optradio" value="F">
                                        <a class="female" style="color: #6c757d;font-weight: 700;">Female</a>
                                </label>
                            </div>
                        </div>

                        <!-- BirthDate -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0 date" id="datetimepicker1">
                                    <i class="fa fa-birthday-cake text-muted"></i>
                                </span>
                            </div>
                            <input id="birthday" type="tel" name="birthday" placeholder="Date Of Birth (dd/mm/yyyy)" class="form-control bg-white border-md border-left-0 pl-3">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                        </div>

                        <div class="input-group col-lg-6 mb-4">
                            <a class="departments" style="color: #6c757d;font-weight: 700;">Departments</a>
                        </div>
                        <div class="input-group col-lg-6 mb-4">
                            <a class="divisions" style="color: #6c757d;font-weight: 700;">Divisions</a>
                        </div>

                        <!-- Departments -->
                        <div class="input-group col-lg-6 mb-4">
                            <select class="form-control bg-white border-md border-left-1 pl-3 text-select" aria-label="" id="department">
                                <option selected>Select Departments</option>
                                <option value="Human Resource">Human Resource</option>
                                <option value="Finance">Finance</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Legal">Legal</option>
                                <option value="Management Business">Management Business</option>
                                <option value="Quality Assurance">Quality Assurance</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Creative">Creative</option>
                                <option value="Business Development">Business Development</option>
                                <option value="Audit">Audit</option>
                            </select>
                        </div>
                        <!-- Divisions -->
                        <div class="input-group col-lg-6 mb-4">
                            <select class="form-control bg-white border-md border-left-1 pl-3 text-select" aria-label="" id="division">
                                <option selected>Select Divisions</option>
                                <option value="Enterprise">Enterprise</option>
                                <option value="Operational">Operational</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Digital Content">Digital Content</option>
                                <option value="Animation Graphic">Animation Graphic</option>
                            </select>
                        </div>

                        <div class="input-group col-lg-6 mb-4">
                            <a class="level" style="color: #6c757d;font-weight: 700;">Level</a>
                        </div>
                        <div class="input-group col-lg-6 mb-4">
                            <a class="role" style="color: #6c757d;font-weight: 700;">Role</a>
                        </div>

                        <!-- Level -->
                        <div class="input-group col-lg-6 mb-4">
                            <select class="form-control bg-white border-md border-left-1 pl-3 text-select" aria-label="" id="level">
                                <option selected>Select Level</option>
                                <option value="Staff">Staff</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Asistant Manager">Asistant Manager</option>
                                <option value="Manager">Manager</option>
                                <option value="Director">Director</option>
                            </select>
                        </div>
                        <!-- Role -->
                        <div class="input-group col-lg-6 mb-4">
                            <input id="role" type="text" name="role" placeholder="Role" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Password -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Password Confirmation -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="passwordConfirmation" type="password" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <a href="#" class="btn btn-regis btn-block py-2" onClick="return check_registration();">
                                <span class="font-weight-bold">Create your account</span>
                            </a>
                        </div>

                        <!-- Divider Text -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>

                        <!-- Already Registered -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Already Registered? <a href="../index.php" class="text-primary ml-2">Sign In</a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row vcenter">
                <div class="copyright">
                    <p class="text-footer navbar-text col-md-12 col-sm-12 col-xs-12">Copyright &copy;<?php echo date("Y"); ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ==================== MODAL REGIS ERROR ======================================= -->

        <!-- First Name required -->
        <div class="modal fade" id="modal-regis-firstname-required" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>First Name is required</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Last Name required -->
        <div class="modal fade" id="modal-regis-lastname-required" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Last Name is required</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Address required -->
        <div class="modal fade" id="modal-regis-address-required" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Address is required</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Email required -->
        <div class="modal fade" id="modal-regis-email-required" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Email is required</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Email unique -->
        <div class="modal fade" id="modal-regis-email-unique" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Email must be unique</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Email invalid -->
        <div class="modal fade" id="modal-regis-email-invalid" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Email is invalid</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Phone Number required -->
        <div class="modal fade" id="modal-regis-phone-required" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Phone Number is required</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Phone Number unique -->
        <div class="modal fade" id="modal-regis-phone-unique" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Phone Number must be unique</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Gender invalid format -->
        <div class="modal fade" id="modal-regis-gender-invalid" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Gender is invalid format (M / F)</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Birth Date invalid format -->
        <div class="modal fade" id="modal-regis-birthdate-invalid" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Birth Date is invalid format (dd/mm/yyyy)</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Department required -->
        <div class="modal fade" id="modal-regis-department-required" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Department is required</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Level required -->
        <div class="modal fade" id="modal-regis-level-required" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Level is required</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Role required -->
        <div class="modal fade" id="modal-regis-role-required" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Role is required</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Password required -->
        <div class="modal fade" id="modal-regis-password-required" tabindex="-1" role="dialog">
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

        <!-- Confirm Password required -->
        <div class="modal fade" id="modal-regis-confirmpassword-required" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Confirm Password is required</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Confirm Password and password not match -->
        <div class="modal fade" id="modal-regis-confirmpassword-notmatch" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Confirm Password is not match with password</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Data saved failed -->
        <div class="modal fade" id="modal-regis-save-failed" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Data saved failed</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Data saved success -->
        <div class="modal fade" id="modal-regis-save-success" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Data saved success</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal" onClick="return redirect_login();">Close</button>
            </div>
            </div>
        </div>
        </div>


   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS, then Custom js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- External Js -->
    <script src="../assets/js/signup.js"></script>
    <script src="../assets/js/bootstrap-datepicker.min.js"></script>
  </body>
</html>