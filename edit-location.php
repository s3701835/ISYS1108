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
        <form action="" method="POST">
            <div class="form-group">
                <div class="form-group">
                    <label for="EditLocation">Edit Location</label>
                    <select class="form-control" id="editLocation">
                        <option>Location1</option>
                        <option>Location2</option>
                        <option>Location3</option>
                        <option>Location4</option>
                    </select>
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

    <!-- Edit Location Field -->

    <?php include 'footer.php'; ?>
</body>

</html>