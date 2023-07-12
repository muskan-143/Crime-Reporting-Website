<?php
session_start();
include "connection.php";
$ID = $_SESSION['Id'];
if (isset($_GET['actionId'])) {
    $id = $_GET['actionId'];
    $query = "update  complaint set STATUS = 'solved', solveOfficerId='$ID' WHERE Id='$id'";
    $conn->query($query);
    header('location:acceptedComplaint.php');
}
?>
