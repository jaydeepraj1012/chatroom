<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" name="submit">

    </form> -->
    <form action="upload.php" method="post" enctype="multipart/form-data">

        <div class="input-group mb-3">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="text" class="form-control" name="message" id="message" aria-label="Recipient's username" aria-describedby="basic-addon2">

            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="submitmsg" name="submit" type="button">sent</button>
            </div>
        </div>
    </form>
</body>

</html>