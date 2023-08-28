<?php
$roomname = $_GET["room"];
$myip = $_SERVER['SERVER_ADDR'];
include("_dbconn.php");
$sql = "SELECT * FROM msgs WHERE room= '$roomname'";
$result = mysqli_query($conn, $sql);
$res = "";
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($myip == $row["ip"]) {
                $res = $res . '<div class="right" >';
                $res = $res . '<p>' . $row["msg"] . "</p>";
                $res = $res . '<span >'  .  '</span></div>';
            } else {
                $res = $res . '<div class="left" >';
                $res = $res . '<span >'  . $row["ip"] . '</span>';
                $res = $res . '<p>' . $row["msg"] . "</p></div>";
            }
        }
    }
}
echo $res;
