<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complaint</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <style>
    .font {
      font-size: x-large;
    }

    /* The actual timeline (the vertical ruler) */
    .main-timeline {
      position: relative;
    }

    /* The actual timeline (the vertical ruler) */
    .main-timeline::after {
      content: "";
      position: absolute;
      width: 6px;
      background-color: #939597;
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -3px;
    }

    /* Container around content */
    .timeline {
      position: relative;
      background-color: inherit;
      width: 50%;
    }

    /* The circles on the timeline */
    .timeline::after {
      content: "";
      position: absolute;
      width: 25px;
      height: 25px;
      right: -13px;
      background-color: #939597;
      border: 5px solid #f5df4d;
      top: 15px;
      border-radius: 50%;
      z-index: 1;
    }

    /* Place the container to the left */
    .left {
      padding: 0px 40px 20px 0px;
      left: 0;
    }

    /* Place the container to the right */
    .right {
      padding: 0px 0px 20px 40px;
      left: 50%;
    }

    /* Add arrows to the left container (pointing right) */
    .left::before {
      content: " ";
      position: absolute;
      top: 18px;
      z-index: 1;
      right: 30px;
      border: medium solid white;
      border-width: 10px 0 10px 10px;
      border-color: transparent transparent transparent white;
    }

    /* Add arrows to the right container (pointing left) */
    .right::before {
      content: " ";
      position: absolute;
      top: 18px;
      z-index: 1;
      left: 30px;
      border: medium solid white;
      border-width: 10px 10px 10px 0;
      border-color: transparent white transparent transparent;
    }

    /* Fix the circle for containers on the right side */
    .right::after {
      left: -12px;
    }

    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media screen and (max-width: 600px) {

      /* Place the timelime to the left */
      .main-timeline::after {
        left: 31px;
      }

      /* Full-width containers */
      .timeline {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
      }

      /* Make sure that all arrows are pointing leftwards */
      .timeline::before {
        left: 60px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
      }

      /* Make sure all circles are at the same spot */
      .left::after,
      .right::after {
        left: 18px;
      }

      .left::before {
        right: auto;
      }

      /* Make all right containers behave like the left ones */
      .right {
        left: 0%;
      }
    }
  </style>

</head>

<body>
  <?php
  session_start();
  include 'userNavBar.php';
  ?>

  <div class="container my-3">
    <h2 class="text-center my-4">My Complaints</h2>

    <?php
    include "connection.php";
    $id = $_SESSION['Id'];
    $query = "Select * from complaint where userId='$id'";
    $result = $conn->query($query);
    $value = "left";
    $officer = 'No officer has view the complaint';
    $officerId = NULL;
    $officerName = NULL;
    $officerContact = NULL;
    while ($row = $result->fetch_assoc()) {
      if ($row['STATUS'] == 'approved' || $row['STATUS'] == 'reject' || $row['STATUS'] == 'pending' || $row['STATUS']=='solved') {
        $id1 = $row['solveOfficerId'];
        $query1 = "SELECT * FROM updateofficer where Id = '$id1'";
        $value1 = $conn->query($query1);
        while ($temp = $value1->fetch_assoc()) {
          $officerId = $temp["Id"];
          $officerName = $temp["Name"];
          $officerContact = $temp["Contact"];
        }
        $officer = "Done";
      }

      echo '
                        <section style="background-color: #F0F2F5;" id="cardBox">
                        <div class="container py-5">
                          <div class="main-timeline">
                            <div class="timeline ' . $value . '">
                              <div class="card " style="box-shadow: -9px -7px #272c4a;">
                                <div class="card-body p-4">
                                  <p class="mb-0">
                                    <b>Complaint Date:  </b>' . $row['Date'] . '<br>
                                    <b>Crime Type:  </b>' . $row['CrimeType'] . '<br>
                                    <b>Status:  </b>' . $row['STATUS'] . '<br>';
                                    
      if($officer == "Done"){
      echo      '
                                    <b>Officer Investigating ID: </b>'.$officerId.'<br>
                                    <b>Officer Name: </b>'.$officerName.'<br>
                                    <b>Officer Contact No. : </b>'.$officerContact.'<br>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                        ';
      }
      else{
          echo '
                        <b>Officer Investigating: </b>'.$officer.'
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </section>

          ';
      }

      if ($value === "left") {
        $value = "right";
      } else {
        $value = "left";
      }
      $officer = "No officer has view the complaint";
    }
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>

</body>

</html>