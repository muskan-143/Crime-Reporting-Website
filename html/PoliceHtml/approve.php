<?php
    session_start();
    include "connection.php";
    $ID = $_SESSION['Id'];
    if(isset($_GET['approveId'])){
        $id = $_GET['approveId'];
        $query = "UPDATE complaint SET  STATUS='approved', solveOfficerId='$ID' WHERE Id='$id'";
        $conn->query($query);
        header('location:complaint.php');
    }
?>