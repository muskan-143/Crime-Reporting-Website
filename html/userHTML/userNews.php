<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>News Website</title>
</head>

<body class="m-0 p-0">

    <div class="container-fluid m-0 p-0">

        <!-- navbar -->
        <div id="nav">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="userNews.php">Home</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <!-- <li class="nav-item">
                                <a class="nav-link " aria-current="page" target="_blank" href="userNews.php">News</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="userFIR.php">Report Complaint</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="myComplaint.php">My Complaint</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="userFeedback.php">Feedback</a>
                            </li>
                        </ul>
                       
                    </div>
                </div>
            </nav>
        </div>

        <!-- News  -->
        <div>
            <div class="row m-3" id="newsType"></div>
            <div class="row me-2 ms-2" id="newsdetails"></div>
        </div>

        <!-- footer -->


    </div>


    <script src="../../js/userJS/userNews.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>