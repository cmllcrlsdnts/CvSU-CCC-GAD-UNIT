<?php 
    include '../database/db.php';

    $id = $_GET['id'];


    $archieve_query = mysqli_query($db, "Update tbl_news set statuss = 'archive' where id = '$id'");

    echo "<script>alert('Video has been archive successfully');window.location.href = '../news.php';</script>";
?>