<?php 
session_start();

$location_name = $location_coordinate = $location_min_time = $location_description = '';
$location_name_error = $location_coordinate_error = $location_min_time_error = $location_description_error = '';

/*if (!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] != TRUE) {
    header('location: login.php');

} elseif (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'TRUE') {*/
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Location name: Validate and submit
        if (empty(trim($_POST['LocationName']))) {
            $location_name_error = "Please enter a location name.";
        } else {
            $location_name = (trim($_POST['LocationName']));
        }

        //Coordinate: Validate and submit
        if (empty(trim($_POST['coordinate']))) {
            $location_coordinate_error = "Please enter location coordinates.";
        } else {
            $location_coordinate = (trim($_POST['coordinate']));
        }

        //Minimum Time: Validate and submit
        if (empty(trim($_POST['mintime']))) {
            $location_min_time_error = "Please enter the minimum time.";
        } else {
            $location_min_time = (trim($_POST['mintime']));
        }

        //Description: Validate and submit
        if (empty(trim($_POST['description']))) {
            $location_description_error = "Please enter a description of the location.";
        } else {
            $location_description = (trim($_POST['description']));
        }
    }
//}
?>

<html>

<head>
    <title>Add Location | Tour Management</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- JavaScript from Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- CSS from Bootstrap -->
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">

    <!-- Individualised CSS -->
    <link rel="stylesheet" type="text/css" href="style/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Location Fields -->
    <h1 class="text-center mt-3">Add Location</h1>

    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <div class="form-group">
                    <label for="LocationName">Location Name</label>
                    <input type="text" class="form-control" id="LocationName" name="LocationName" placeholder="Add Location Name">
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

    <?php include 'footer.php'; ?>
</body>

</html>
