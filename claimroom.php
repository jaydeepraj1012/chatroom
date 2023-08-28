<?php
$room = $_POST["room"];
if (strlen($room) > 20 or strlen($room) < 2) {
    echo "enter room len 2 to 20";
} else if (!ctype_alnum($room)) {
    echo "not allow number room name";
} else {

    include("_dbconn.php");
    $sql = "SELECT * FROM `room` WHERE roomname ='$room'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
?>
            <script>
                alert("already chatroom!");
                window.location.href = "index.php";
            </script>

            <?php
        } else {

            $sql = "INSERT INTO `room` ( `roomname`, `time`)
        VALUES ('$room', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            if (mysqli_query($conn, $sql)) {

            ?>
                <script>
                    alert("welcome chatroom!");
                    window.location.href = "room.php?roomname=<?php echo $room; ?>";
                </script>

<?php
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
    }
}
