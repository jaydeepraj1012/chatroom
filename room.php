<?php
include("header.php");
$roomname = $_GET["roomname"];
include("_dbconn.php");
$sql = "SELECT * FROM `room` WHERE roomname ='$roomname'";
$result = mysqli_query($conn, $sql);
if ($result) {
    if (mysqli_num_rows($result) == 0) {
?>
        <script>
            alert("already chatroom!");
            window.location.href = "index.php";
        </script>

    <?php
    } else { ?>

        <!DOCTYPE html>
        <html>

        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                body {
                    background-image: url("room.jpg");
                    margin: 0 auto;
                    max-width: 800px;
                    padding: 0 20px;
                }

                .container {
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                    border-radius: 5px;
                    padding: 10px;
                    margin: 10px 0;
                    background: none;
                }

                .darker {
                    border-color: #ccc;
                    background-color: #ddd;
                }

                .container::after {
                    content: "";
                    clear: both;
                    display: table;
                }

                .container img {
                    float: left;
                    max-width: 60px;
                    width: 100%;
                    margin-right: 20px;
                    border-radius: 50%;
                }

                .container img.right {
                    float: right;
                    margin-left: 20px;
                    margin-right: 0;
                }

                .time-right {
                    float: right;
                    color: #aaa;
                }

                .time-left {
                    float: left;
                    color: #999;
                }

                .container {
                    width: 80%;
                    height: 90vh;
                    margin: auto;
                }

                .anyclass {
                    width: 100%;
                    height: 80vh;
                    position: relative;
                    color: black;

                    overflow-x: hidden;
                    padding-bottom: 20px;
                    overflow: overlay;
                }

                .right {
                    color: #fff;
                    margin: auto;
                    width: 80%;
                    text-align: right;
                }

                ::-webkit-scrollbar {
                    background: transparent;
                }

                ::-webkit-scrollbar-thumb {
                    background: transparent;
                    opacity: -1;
                    border-radius: 10px;

                }

                .left {
                    color: #fff;
                    margin: 3px auto;
                    width: 80%;
                    text-align: left;
                }

                #message {
                    width: 85%;
                    color: #fff;
                    margin: 7px 7px 0px;
                    background: transparent;
                    border: none;
                    border-bottom: 3px solid #c7b8b8;
                    border-radius: 11px;
                    outline: none;
                }

                #submitmsg {
                    color: white;
                    margin: 7px 7px 0px;
                    background-color: black;
                }

                form {
                    margin-top: 10px;
                }
            </style>
        </head>

        <body>
            <div class="container">
                <h2> Chat <?php echo $roomname ?> </h2>
                <div class="anyclass">
                </div>

                <form action="upload.php" method="post" enctype="multipart/form-data">

                    <div class="input-group mb-3">


                        <input type="text" name="message" id="message">

                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="submitmsg" name="submit" type="button">sent</button>
                        </div>
                    </div>
                </form>

            </div>
            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
            <script>
                $("#submitmsg").click(function() {
                    var clintmsg = $("#message").val();
                    $.post("postmsg.php", {
                        msg: clintmsg,
                        room: '<?php echo $roomname ?>',
                        ip: '<?php echo $_SERVER['SERVER_ADDR'] ?>',
                        // imagename: fileToUpload,
                    }, )
                    $("#message").val("");
                    return false;
                })
            </script>
            <script>
                setInterval(runfunction, 1000);

                function runfunction() {

                    $.get("showmsg.php", {
                        room: '<?php echo $roomname ?>'
                    }, function(data, status) {
                        $(".anyclass").html(data);

                    });


                }
            </script>

            <script>
                $(document).ready(function() {
                    $("#submitmsg").click(function() {
                        $(".anyclass").animate({
                            scrollTop: $(
                                '.anyclass').get(0).scrollHeight
                        }, "fast");
                    });
                })




                // var time = new Date().getTime();
                // $(document.body).bind("mousemove keypress", function(e) {
                //     time = new Date().getTime();
                // });

                // function refresh() {
                //     if (new Date().getTime() - time >= 20000)

                //         window.location.href = "deletemsge.php";
                //     else
                //         setTimeout(refresh, 10000);
                // }

                // setTimeout(refresh, 10000);
            </script>
    <?php
    }
}







    ?>