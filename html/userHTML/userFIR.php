<?php
// Connecting to the database
$conn = mysqli_connect('localhost', 'root', '', 'crimereporting') or die('Connection failed');

// submitting the details when click on the submit button.
$inserted = false;
if (isset($_POST['sub'])) {


    // Inserting the value into the complaint table.
    session_start();
    $name = $_SESSION['Name'];
    $id = $_SESSION['Id'];
    $email = $_SESSION['Email'];
    $contact = $_SESSION['Contact'];
    $crimeType = $_POST['selectCrime'];
    $state = $_POST['selectState'];
    $district = $_POST['selectDistrict'];
    $crimeDate = $_POST['crimeDate'];
    $userDescription = $_POST['userDescription'];

    $query = "INSERT INTO complaint (Name, Contact, Email, CrimeType, Date, description, State, District, userId) VALUES('$name','$contact','$email','$crimeType','$crimeDate','$userDescription','$state','$district','$id')";

    $insert = mysqli_query($conn, $query) or die('Query failed');
    if ($insert) {
        $inserted = true;
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Linking the css file present in the userCss folder  -->
    <link rel="stylesheet" href="../../css/userCSS/userFIR.css">

</head>

<body style="background: #1b203d;color:white;">
    <?php
     include 'userNavBar.php';
    ?>
    <div class="container my-2" style="height:3rem;"></div>

    <div class="container my-4" style="background: #272c4a;">
        <br>
        <div class="mb-3">
            <h1 class="text-center">Report Complaint</h1>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="row g-3" style="padding:2rem;">
            <div class="mb-3">
                <label for="email" class="form-label" for="validationDefault01">Please select nearest Location</label>
                <select class="form-select" aria-label="Default select example" name="selectState" id="crimeType" style="background:#1b203d; color:white">
                    <option value="Not Selected">--Select State--</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="State 1">State 1</option>
                    <option value="State 2">State 2</option>
                </select>

                <small id="selectOption" class="form-text invalid-feedback">
                    Please Select the State.
                </small>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Please select District</label>
                <select class="form-select" aria-label="Default select example" name="selectDistrict" id="crimeType" style="background:#1b203d; color:white">
                    <option value="Not Selected">--Select district--</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Chembur">Chembur</option>
                    <option value="Dadar">Dadar</option>
                </select>

                <small id="selectOption" class="form-text invalid-feedback">
                    Please Select the State.
                </small>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Please select Crime Type</label>
                <select class="form-select" aria-label="Default select example" name="selectCrime" id="crimeType" style="background:#1b203d; color:white">
                    <option value="Not Selected">--Select crime type--</option>
                    <option value="Kidnapping">Kidnapping</option>
                    <option value="Homicide(murder)">Homicide(murder)</option>
                    <option value="Rape">Rape</option>
                    <option value="Theft">Theft</option>
                    <option value="anyOther">AnyOther</option>
                </select>

                <small id="selectOption" class="form-text invalid-feedback">
                    Please Select the Crime Type.
                </small>
            </div>
            <!-- 
            <div class="mb-3" class="textCrimeType">
                <label for="textCrimeType" class="form-label textCrimeType">Please describe the crime:</label><br>
                <textarea name="textCrimeTypeDescription" cols="30" rows="5" style="width:20rem"
                    class="textCrimeType"></textarea>
            </div> -->

            <!-- <div class="mb-3">
                <label for="date" class="form-label">Select Image of criminal:</label><br>
                <input type="file" id="img" accept=".jpg,.jpeg,.png" name="image">

            </div> -->

            <div class="mb-3">
                <label for="date" class="form-label">Select Date:</label>
                <input type="date" class="form-control" id="date" style="width:15rem;" name="crimeDate" min="2023-03-25" max="2023-04-19" id="date" style="background:#1b203d; color:white">

                <small id="dateValid" class="form-text invalid-feedback">
                    Please select the date.
                </small>

            </div>

            <div class="mb-3">
                <!-- <label for="file" class="form-label">Any Evidence:</label>
                <input type="file" class="form-control" id="evidenceFile" name="fileName">
                <small id="evidence" class="form-text invalid-feedback">
                    Please provide the evidence.
                </small> -->
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label><br>
                <textarea name="userDescription" id="description" cols="30" rows="5" style="width:20rem" style="background:#1b203d; color:white"></textarea>
                <small id="descriptionValid" class="form-text invalid-feedback">
                    Please describe the case properly with minimum 2-3 word.
                </small>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-danger" name="sub" id="submit">Submit</button>
            </div>
        </form>
    </div>
    <!-- For adding the description  -->
    <!-- <script>
        function toggleCrimeTypeDescription() {
            let option = document.getElementById('crimeType');
            let hideVisible = document.getElementsByClassName('textCrimeType');
            if (option.value == 'anyOther') {
                for (var x = 0; x < hideVisible.length; x++) {
                    hideVisible[x].style.display = "block";
                }
            } else {
                for (var x = 0; x < hideVisible.length; x++) {
                    hideVisible[x].style.display = "none";
                }
            }
        }
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="../../js/userJS/userFIR.js"></script>
    <!-- <script src="../../js/userJS/userFIR.js"></script> -->
</body>

</html>