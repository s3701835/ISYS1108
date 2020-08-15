<?php
session_start();
require_once 'config.php';

/*
 * 1. Server name --> Copy from add location
 * 2. Run cmd command "ssh john@121.200.18.218 -p 2222" pass "123456789"
 * 3. Copy db name, ask edmund
 * 4. Check line 27 $_POST id is working
 * 5. Change location name $row["this"] line 32 - 36 --> Ask edmund what table fields name are
 * */

$servername= "http://121.200.18.218";
$username = "john";
$password = "123456789";
$db = "";

$conn = new mysqli($servername, $username, $password, $db);

if ($con ->connect_error){
    die("Connection Failed".$conn->connect_error);
}

$location_name = $location_coordinate = $location_min_time = $location_description = '';
$location_name_error = $location_coordinate_error = $location_min_time_error = $location_description_error = '';

$location_id = $_POST["id"];

$sql = "SELECT * FROM database WHERE ";

$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();

    $location_name = $row["name"];
    $location_coordinate = $row["coordinate"];
    $location_min_time = $row["min_time"];
    $location_description = $row["description"];
}


?>

<html>

<head>
    <title>Edit Location | Tour Management</title>

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

<!-- Edit Location Field -->
<h1 class="text-center mt-3">Edit Location</h1>

<div class="container">

    <div class="py-4">
        <select class="form-control" id="editLocation" name="editLocation">
            <option value="" selected>Select Location</option>
        </select>
    </div>

    <!-- Form shows only when Admin selects location, to be implemented on Sprint 2 & 3 -->
    <form action="locationEditScript.php" method="POST">
        <input type="hidden" id="id" name="id">

        <div id="locationInfo" class="">
            <div class="form-group row">
                <label for="locationName" class="col-sm-2 col-form-label">Location Name</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo (!empty($location_name_error)) ? 'border border-danger' : ''; ?>" id="locationName" name="locationName" placeholder="Location Name" value="<?php echo $_POST['locationName']; ?>">

                    <p class="text-danger">
                        <?php echo $location_name_error; ?>
                    </p>
                </div>
            </div>

            <div class="form-group row">
                <label for="Coordinate" class="col-sm-2 col-form-label">Coordinate</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo (!empty($location_coordinate_error)) ? 'border border-danger' : ''; ?>" id="Coordinate" name="Coordinate" placeholder="Enter Coordinate" value="<?php echo $_POST['Coordinate']; ?>">

                    <p class="text-danger">
                        <?php echo $location_coordinate_error; ?>
                    </p>
                </div>
            </div>

            <div class="form-group row">
                <label for="MinTime" class="col-sm-2 col-form-label">MinTime</label>

                <div class="col-sm-10">
                    <input type="number" class="form-control <?php echo (!empty($location_min_time_error)) ? 'border border-danger' : ''; ?>" id="MinTime" name="MinTime" placeholder="Enter MinTime" value="<?php echo $_POST['MinTime']; ?>">

                    <p class="text-danger">
                        <?php echo $location_min_time_error; ?>
                    </p>
                </div>
            </div>

            <div class="form-row row">
                <label for="Description" class="col-sm-2 col-form-label">Description</label>

                <div class="col-sm-10">
                    <textarea class="form-control <?php echo (!empty($location_description_error)) ? 'border border-danger' : ''; ?>" id="Description" name="Description" placeholder="Enter Description" rows="10" cols="30"><?php echo $_POST['Description']; ?></textarea>

                    <p class="text-danger">
                        <?php echo $location_description_error; ?>
                    </p>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>

<!-- Edit Location Field -->

<?php include 'footer.php'; ?>
</body>

</html>