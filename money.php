<?php
    
    $sender = $_GET['sender'];
    $receiver = $_GET['receiver'];
    $val = $_POST['money'];
    $conn = mysqli_connect("localhost", "root", "", "banking");
    $query1 = " UPDATE customer SET balance = balance - '$val' WHERE number = '$sender' ";
    $query2 = " UPDATE customer SET balance = balance + '$val' WHERE number = '$receiver' ";

    $result1 = mysqli_query($conn, $query1);
    $result2 = mysqli_query($conn, $query2);
    header("Location: http://localhost/Basic%20Banking/view.php");
    exit();

?>