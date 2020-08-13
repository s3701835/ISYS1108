<html>

<head>
    <title>Add Location | Tour Management</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- JavaScript from Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- CSS from Bootstrap -->
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">

    <!-- Individualised CSS -->
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-back sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLocation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tour Management</a>

                    <div class="dropdown-menu" aria-labelledby="navbarLocation">
                        <a class="dropdown-item" href="/tour-management-system/tour.php">Add New Tour</a>

                        <a class="dropdown-item" href="/tour-management-system/modify-tour.php">Edit Existing Tour</a>

                        <hr>

                        <a class="dropdown-item" href="/tour-management-system/tour-type.php">Add New Tour Type</a>

                        <a class="dropdown-item" href="/tour-management-system/list-tour-type.php">View Existing Tour Type</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLocation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Location Management</a>

                    <div class="dropdown-menu" aria-labelledby="navbarLocation">
                        <a class="dropdown-item" href="location.php">Add New Location</a>

                        <a class="dropdown-item" href="edit-location.php">Edit Existing Location</a>

                        <hr>

                        <a class="dropdown-item" href="/tour-management-system/delete-location.php">Delete Existing Location</a>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="/tour-management-system/login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- NavBar -->


    <!-- Location Fields -->
    <h1 class="text-center mt-3">Add Location</h1>

    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <div class="form-group">
                    <label for="LocationName">Location Name</label>
                    <input type="text" class="form-control" id="LocationName" name="LocationName" placeholder="Enter Location Name">
                </div>

                <!-- Start coordinate field here -->
                <div class="form-group">
                    <label for="Coordinate">Coordinate</label>
                    <input type="text" class="form-control" id="Coordinate" name="Coordinate" placeholder="Enter Coordinate">
                </div>
                <!-- End coordinate field here -->

                <!-- Start MinTime field here -->
                <div class="form-group">
                    <label for="MinTime">MinTime</label>
                    <input type="number" class="form-control" id="MinTime" name="MinTime" placeholder="Enter MinTime">
                </div>
                <!-- End MinTime field here -->

                <!-- Start Description textarea here -->
                <div class="form-row">
                    <div class="col">
                        <label for="Description">Description</label>
                        <textarea class="form-control" id="Description" name="Description" placeholder="Enter Description" rows="10" cols="30"> </textarea>
                    </div>
                </div>
                <!-- End Description textarea here -->

                <!-- put submit buttom here -->
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
    </div>
    <!-- Location Fields -->


    <!-- Footer -->
    <div class="fixed-container text-white py-2 bg-back">
        <h6 class="text-center mb-0">Copyright &copy; 2020</h6>
    </div>
    <!-- Footer -->
</body>

</html>
