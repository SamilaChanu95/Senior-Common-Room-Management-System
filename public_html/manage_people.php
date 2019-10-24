<?php
include_once("./database/constants.php");
    if ($_SESSION["usertype"] != "admin") {
        header("location:" . DOMAIN . "/index.php");
    }
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SCR Management System @ University of Jaffna</title>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="./Password-Strength/password_strength/password_strength_lightweight.js" async></script>
    <link rel="stylesheet" href="./Password-Strength/password_strength/password_strength.css">
    <script type="text/javascript" src="./js/main.js" async></script>
    <script type="text/javascript" src="./js/manage.js" async></script>

</head>
<body>
<!-- Navbar -->
<?php include_once("./templates/header.php"); ?>
<br/><br/>
<div class="container-fluid">
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Employee ID</th>
            <th>Email</th>
            <th>Contact-No</th>
            <th>User Type</th>
            <th>Register Date</th>
            <th>Last Login</th>
            <th>Status</th>
            <th>Notes</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody id="get_people">
        <!--on manage.js-->
        </tbody>
    </table>
    <a href="#" data-toggle="modal" data-target="#register_inside_form" class="btn btn-primary">Register</a>
</div>


<?php
//Update Register Form
include_once("./templates/update_people.php");

//Register Form
include_once("./templates/registerinside.php");
?>
</body>
</html>