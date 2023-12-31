<?php
    include "connection.php";

    if(isset($_POST['submit'])){
        $websiteEasyToUse = $_POST['websiteEasyToUse'];
        $SolvedInTime = $_POST['SolvedInTime'];
        $problemWhileReporting = $_POST['problemWhileReporting'];
        $Satisfied = $_POST['Satisfied'];

        $query = "INSERT INTO feedback (WebsiteEasyToUse, SolvedInTime,problemWhileReporting,Satisfied) VALUES ('$websiteEasyToUse','$SolvedInTime','$problemWhileReporting','$Satisfied')";
        $result = mysqli_query($conn, $query);
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/userCSS/userFeedBack.css">
</head>

<body>
    <?php
    include 'userNavBar.php';
    ?>
    <div class="container my-5 ">
        <h3 class="text-center">FEEDBACK FORM</h3>
        <h4 class="text-center">Share your experience to help you more!</h4>
    </div>
    <div class="container">
        <h6>Please select the following to rate us:</h6>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table class="table table-striped">
                <tr class="p-3">
                    <td></td>
                    <td>&nbsp; &nbsp;&nbsp;&nbsp; YES</td>
                    <td>&nbsp; &nbsp;&nbsp;&nbsp; NO</td>
                </tr>
                <tr class="p-3">
                    <td>Is the website easy to understand</td>
                    <td>
                        <input class="form-check-input alignCenter" type="radio" name="websiteEasyToUse" value="YES">
                    </td>
                    <td><input class="form-check-input alignCenter" type="radio" name="websiteEasyToUse" value="NO"></td>
                    <!-- <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault"></td> -->
                    <!-- <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault"></td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault"> </td> -->
                </tr>
                <tr class="p-3">
                    <td>The case has been solved within the time</td>
                    <td>
                        <input class="form-check-input alignCenter" type="radio" name="SolvedInTime" value="YES">
                    </td>
                    <td>
                        <input class="form-check-input alignCenter" type="radio" name="SolvedInTime" value="NO">
                    </td>
                    <!-- <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault1"></td> -->
                    <!-- <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault1"></td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault1"> </td> -->
                </tr>
                <tr class="p-3">
                    <td>Have you gone through any problem while reporting</td>
                    <td>
                        <input class="form-check-input alignCenter" type="radio" name="problemWhileReporting" value="YES">
                    </td>
                    <td><input class="form-check-input alignCenter" type="radio" name="problemWhileReporting" value="NO"></td>
                    <!-- <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault2"></td> -->
                    <!-- <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault2"></td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault2"> </td> -->
                </tr>
                <tr class="p-3">
                    <td>Are you satisfied with the action taken.</td>
                    <td>
                        <input class="form-check-input alignCenter" type="radio" name="Satisfied" value="YES">
                    </td>
                    <td><input class="form-check-input alignCenter" type="radio" name="Satisfied" value="NO"></td>
                    <!-- <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault3"></td> -->
                    <!-- <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault3"></td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault3"> </td> -->
                </tr>

                <!-- <tr class="p-3">
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ut.</td>
                <td>
                    <input class="form-check-input alignCenter" type="radio" name="flexRadioDefault4">
                </td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault4"></td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault4"></td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault4"></td> 
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault4"> </td>
            </tr>
            <tr class="p-3">
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ut.</td>
                <td>
                    <input class="form-check-input alignCenter" type="radio" name="flexRadioDefault5">
                </td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault5"></td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault5"></td>
               <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault5"></td> 
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault5"> </td>
            </tr>
            <tr class="p-3">
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ut.</td>
                <td>
                    <input class="form-check-input alignCenter" type="radio" name="flexRadioDefault6">
                </td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault6"></td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault6"></td>
               <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault6"></td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault6"> </td> 
            </tr>
            <tr class="p-3">
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ut.</td>
                <td>
                    <input class="form-check-input alignCenter" type="radio" name="flexRadioDefault7">
                </td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault7"></td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault7"></td>
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault7"></td> 
                <td><input class="form-check-input alignCenter" type="radio" name="flexRadioDefault7"> </td> 
            </tr> -->
            </table>
    </div>
    <div class="container">
        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
    </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<script src="../../js/userJS/userFeedback.js"></script>
</body>

</html>