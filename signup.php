<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bitter&display=swap');

        body {
            background: #83a4d4;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #83a4d4, #b6fbff);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #83a4d4, #b6fbff);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .navbar {
            background-color: #800000;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .form-fields {
            padding: 10px 10px 10px 10px;
        }

        .btn {
            background-color: black;
            color: aliceblue;
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

    <!-- Login Form -->
    <div class="container-fluid" style="margin-top: 10%;">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <form method="POST" action="signup_back.php">
                    <div class="form-group">
                        <h1 class="mb-3">SIGN UP FORM</h1>
                        <input class="form-fields form-control" type="text" placeholder="Enter your username"
                            name="username" required>
                        <br>
                        <input class="form-fields form-control" type="text" placeholder="Enter your password"
                            name="password" required>
                        <br>
                        <input class="form-fields form-control" type="email" placeholder="Enter your Email"
                            name="email" required>
                        <br>
                        <input class="form-fields form-control" type="tel" placeholder="Enter your telephone"
                            name="telephone" require>
                        <br>
                        <input class="btn btn-lg" type="submit" value="SIGN UP NOW" name="signup">
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <!-- Login Form ends-->




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