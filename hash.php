<!-- // // The plain text password to be hashed
// $plaintext_password = "Password@123";

// // The hash of the password that
// // can be stored in the database
// $hash = password_hash($plaintext_password,
// PASSWORD_DEFAULT);

// // Print the generated hash
// echo "Generated hash: ".$hash; -->
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>

        <form method="post">
                <input type="text" id="pwd" name="name" />
                <input type="submit">

        </form>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jsSHA/2.0.2/sha.js"></script>

<script>
        function mySubmit(obj) {
                var pwdObj = document.getElementById('pwd');
                var hashObj = new jsSHA("SHA-512", "TEXT", {
                        numRounds: 1
                });
                hashObj.update(pwdObj.value);
                var hash = hashObj.getHash("HEX");
                pwdObj.value = hash;

        }

        mySubmit();
        a = 56;
        console.log(a);
       
</script>