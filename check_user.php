<?php
include "config.php";
if(isset($_GET['name'])) {
    $searchName = mysqli_real_escape_string($con, $_GET['name']);
    $sql = "SELECT * FROM users WHERE Name = '$searchName'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0) {
        echo 'found';
    } else {
        echo 'not found';
    }
} else {
    echo 'error';
}
?>
