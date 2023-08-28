<?php
include("_dbconn.php");
$msg = $_POST["msg"];
$room = $_POST["room"];
$ip = $_POST["ip"];
$imagename = $_POST["imagename"];
$sql = "INSERT INTO `msgs` ( `msg`, `room`, `dt`, `ip`,`imagename`)
 VALUES ( '$msg', '$room', current_timestamp(), '$ip','$imagename');";
$result = mysqli_query($conn, $sql);
