<?php

    require "../config/dbConfig.php";

    global $conn;
    // var_dump($conn);exit;

    // query sql to get data employee
    $sql = $conn->query("SELECT * FROM employee WHERE employee_id != 'admin'");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

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
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2972b3">
    <!-- <a class="navbar-brand" href="#">Employee Directory</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onClick="return logout();">Logout</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <div class="container">
        <h3>Employee Directory</h3>
    </div>
    <div class="container">
        <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Employee ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Gender</th>
            <th scope="col">Birthdate</th>
            <th scope="col">Department</th>
            <th scope="col">Division</th>
            <th scope="col">Level</th>
            <th scope="col">Role</th>
            </tr>
        </thead>
        <?php while($emp = $sql->fetch_array()) { 
            // print_r($emp);    
        ?>
        <tbody>
            <tr>
            <td><?php echo $emp['employee_id']; ?></td>
            <td><?php echo $emp['firstname']; ?></td>
            <td><?php echo $emp['lastname']; ?></td>
            <td><?php echo $emp['address']; ?></td>
            <td><?php echo $emp['phone']; ?></td>
            <td><?php echo $emp['gender']; ?></td>
            <td><?php echo $emp['birthdate']; ?></td>
            <td><?php echo $emp['department']; ?></td>
            <td><?php echo $emp['division']; ?></td>
            <td><?php echo $emp['level']; ?></td>
            <td><?php echo $emp['role']; ?></td>
            </tr>
        </tbody>
        <?php } ?>
        </table>
    </div>

    <!-- ==================== MODAL ERROR ======================================= -->

    <!-- Token Expired -->
    <div class="modal fade" id="modal-login-token-expired" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Token Expired. Please Login again</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal" onClick="return redirect_index();">Close</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="../assets/js/home.js"></script>
</body>
</html>