<?php
include("header.php");

?>
<style>
    body {
      
        background-image: url("chatroom.jpg");
    overflow: hidden;
    }

    h1 {
        margin-top: 64px;
        text-align: center;
    }

    #roomcreate {
        display: flex;
        justify-content: center;
        margin: 161px 0px 0px 0px;
        /* align-items: center; */
        height: 100vh;
    }

    #input {
        outline: none;
        border: none;
        width: 80%;
        height: 45px;
        background-color: none;
        color: #0672e5;
        border-radius: 11px;
        /* opacity: 0.7; */
        /* background: rgba(196, 170, 122, 0.7); */
        border-bottom: 3px solid #a16a6a;
        /* background-color: #C4AA7A; */
        font-size: 25px;
        background: transparent;

        -webkit-appearance: none;
    }
</style>


<body>
    <h1>Welcome chatroom </h1>
    <div id="roomcreate">

        <form action="claimroom.php" method="post">
            <input id="input" type="text" name="room" placeholder="Enter name ">
            <input type="submit">
        </form>

    </div>
</body>