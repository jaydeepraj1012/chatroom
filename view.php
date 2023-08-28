<?php
include "database_connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content=
	"width=device-width, initial-scale=1.0">
</head>

<body>
	<?php
	
	$stmt = $conn->prepare('select * from images');
	$stmt->execute();
	$imagelist = $stmt->fetchAll();

	foreach($imagelist as $image) {
	?>
		
	<img src="<?=$image['image']?>"
		title="<?=$image['name'] ?>"
		width='200' height='200'>
	<?php
	}
	?>
</body>

</html>
