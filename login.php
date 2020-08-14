<?php 
session_start();
require_once 'config.php';
?>

<html>

<head>
    <title>Login | Tour Management</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- JavaScript from Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- CSS from Bootstrap -->
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">

    <!-- Individualised CSS -->
    <link rel="stylesheet" type="text/css" href="style/style.css">

</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Login Form -->
    <h1 class="text-center mt-3">Login</h1>

    <div class="container">
        <form action="/tour-management-system/login.php" method="POST">

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" value="">

                <div>
                    <p class="text-danger">
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" value="">

                <div>
                    <p class="text-danger"></p>
                </div>
            </div>

            <div>
                <p class="text-danger"></p>
            </div>
                
            <button type="submit" class="btn btn-primary btn-block">Login</button>

        </form>
    </div>
    <!-- Login Form -->

    <?php include 'footer.php'; ?>
</body>

</html>