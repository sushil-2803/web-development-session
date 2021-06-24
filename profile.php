<?php

session_start();
if(!isset($_SESSION['username']))
{
    echo "<script>alert('Please login')</script>";
    echo "<script>window.location='login.php'</script>";
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Profile Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bitter&display=swap');

        .navbar {
            background-color: #800000;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- NavBar Starts -->
    <nav class="navbar navbar-light navbar-expand-lg">
        <a class="navbar-brand ml-5" href="#" style="color:aliceblue; font-family: 'Bitter', serif;">MY DYP - RAIT</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active mr-5">
                <a class="nav-link" href="index.php" style="color:aliceblue; font-family: 'Bitter', serif;">HOME</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="login.php" style="color:aliceblue; font-family: 'Bitter', serif;">LOGIN IN
                </a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="signup.php" style="color:aliceblue; font-family: 'Bitter', serif;">SIGN
                    UP</a>
            </li>
        </ul>
    </nav>
    <!-- NavBar Ends -->

    <!-- Hero Section starts -->
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="jumbotron mt-5">
                    <h1 class="display-5">Hello, <?php  echo $_SESSION['username']; ?> !</h1>
                    <p class="lead">At RAIT, the students are nurtured such that they develop the roots to remain well
                        grounded. They are also taught to develop their wings in order to fulfill their dreams to
                        conquer new horizons.</p>
                    <hr class="my-4">
                    <blockquote><i>“Dnyanadheenam Jagat Sarvam”.</i></blockquote>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <!-- Hero Section ends -->

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <!--Update profile form starts-->
                <div class="" style="background-color: grey;padding: 20px 20px 10px 20px;">
                    <h5 class="display-5 mb-4">Update Profile section</h5>
                    <form method="POST" action="update.php">
                        <div class="form-group">
                            <input class="form-control mb-4" type="text" placeholder="change your username"
                                name="updateUsername" required>
                            <input class="form-control mb-4" type="password" placeholder="change your password"
                                name="updatePassword" required>
                            <input type="submit" value="Update Now" class="btn btn-primary" name="update" required>
                        </div>
                    </form>
                </div>
                <!--Update profile form ends-->
            </div>
            <div class="col">
                <!--Delete profile form starts-->
                <div class="" style="padding: 20px 20px 10px 20px;">
                    <h5 class="display-5 mb-4">Delete Profile</h5>
                    <form method="POST" action="delete.php">
                        <div class="form-group">
                            <input type="submit" value="Delete Now" class="btn btn-danger" name="delete" >
                        </div>
                    </form>
                </div>
                <!--Delete profile form ends-->
            </div>
            <div class="col">
                <!--Sign out profile form starts-->
                <div class="" style="padding: 20px 20px 10px 20px;">
                    <h5 class="display-5 mb-4">Sign out Profile</h5>
                    <form method="POST" action="logout.php">
                        <div class="form-group">
                            <input type="submit" value="Sign out Now" class="btn btn-secondary" name="logout">
                        </div>
                    </form>
                </div>
                <!--Sign out profile form ends-->
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>