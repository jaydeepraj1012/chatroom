<?php
$room = $_POST["room"];
echo $room;
if (strlen($room) > 20 or strlen($room) < 2) {
} else if (!ctype_alnum($room)) {
} else {
    include("_dbconn.php");
    $sql = "SELECT * FROM `room` WHERE roomname ='$room'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
?>
            <script>
                alert("already!");
                window.location.href = "index.php";
            </script>

        <?php
        }
    } else {
        $sql = "INSERT INTO `room` ( `roomname` ,`time`) VALUES ( '$room',CURRENT_TIMESTAMP );";
        $result = mysqli_query($conn, $sql);
        if ($result) {
        ?>
            <script>
                alert("welcome chatroom!");
                window.location.href = "room.php?roomname=$room ";
            </script>

<?php
        }
    }
}



?>