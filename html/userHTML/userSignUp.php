<?php
$conn = mysqli_connect('localhost', 'root', '', 'crimereporting') or die('connection failed');

if (isset($_POST['sub'])) {

    // Taking all the value from the user and storing it in the database.
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userContact = $_POST['userContact'];
    $userAge = $_POST['userAge'];
    $genderMaleFemaleOther = $_POST['genderMaleFemaleOther'];
    $userPassword = $_POST['userPassword'];


    // The query that will insert the value in the database.
    $insert = mysqli_query($conn, "INSERT INTO  `registerationform`(Name, Email, Contact, Age, Gender,password) VALUES('$userName','$userEmail','$userContact','$userAge','$genderMaleFemaleOther','$userPassword')") or die('query failed');
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FormValidation.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/userCSS/userSignUp.css">
    <style>
        body {
            color: white;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>

    <div id="" style="height: 2rem"></div>

    <div class="container" id="login">

        <div class="card border-dark mb-3 my-3" id="card" style="max-width: 40rem">
            <div class="card-body">
                <h3 class="card-title text-center my-4">Registration Form</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="row g-3">

                    <div class="mb-3 mx-4">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="validationDefault01" placeholder="Enter your Name" name="userName" required />

                    </div>
                    <div class="mb-3 mx-4">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="validationDefault02" placeholder="Enter your email" name="userEmail" required />
                    </div>
                    <div class="mb-3 mx-4">
                        <label for="phone" class="form-label">Contact Number </label>
                        <input type="tel" class="form-control" id="validationDefault03" name="userContact" placeholder="Contact number"  maxlength=10  required/>

                    </div>
                    <div class="mb-3 mx-4">
                        <label for="age" class="form-label">Age </label>
                        <input type="number" class="form-control" id="validationDefault04" name="userAge" placeholder="Enter your age" required />
                      
                    </div>
                    <div class="mb-3 mx-4">
                        <label for="gender">Gender</label>
                        <div class="mb-3 mx-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genderMaleFemaleOther" id="validationDefault05" value="MALE" checked required />
                                <label class="form-check-label" for="genderMaleFemaleOther">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genderMaleFemaleOther" value="FEMALE" id="validationDefault06" required />
                                <label class="form-check-label" for="genderMaleFemaleOther">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genderMaleFemaleOther" value="OTHER" id="Other" required />
                                <label class="form-check-label" for="genderMaleFemaleOther">
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mx-4">
                        <label for="password" class="form-label">Password </label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" name="userPassword" />
                       
                    </div>
                    <div class="mb-3 mx-4">
                        <label for="password" class="form-label">Confirm Password </label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Enter your password" />
                        <small id="validPasswordConfirm" class="form-text invalid-feedback">
                            Please type the same password as mention above.
                        </small>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="userBtn" id="userSignUpButton" style="width: 12rem" name='sub'>
                            Register
                        </button>
                        <hr>
                        Already a member?<a href="userLogin.php"><b>Login</b></a>
                    </div>

            </div>


            </form>
        </div>
    </div>
    </div>


    <script type="text/javascript">
        function checkDelete() {
            return confirm("Are you sure you want to Delete the data?");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>

</body>

</html>