<?php
session_start();
$centro=1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Calendario de reserva</title>
</head>

<body>

	<?php
	// Captcha
	//if(empty($_SESSION['captcha'] ) ||
	//	strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0)
	//	{
	//		//Note: the captcha code is compared case insensitively.
	//		//if you want case sensitive match, update the check above to
	//		// strcmp()
	//		$errors = "<h3><font color=\"red\">Wrong code!</font></h3>";
	//		echo $errors;
	//	}

	if (empty($errors)) {
		include 'config.php';

		// Create connection
		$conn = mysqli_connect($servername, $username, $password,  $dbname);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$start_day = intval(strtotime(htmlspecialchars($_POST["start_day"])));
		$start_time = (60 * 60 * intval(htmlspecialchars($_POST["start_hour"]))) + (60 * intval(htmlspecialchars($_POST["start_minute"])));
		$end_day = intval(strtotime(htmlspecialchars($_POST["end_day"])));
		$end_time = (60 * 60 * intval(htmlspecialchars($_POST["end_hour"]))) + (60 * intval(htmlspecialchars($_POST["end_minute"])));
		$name = htmlspecialchars(isset($_POST["name"]));
		$phone = htmlspecialchars(isset($_POST["phone"]));
		$item = htmlspecialchars($_POST["item"]);
		$usuario = htmlspecialchars($_POST['usuario']);
		$start_epoch = $start_day + $start_time;
		$end_epoch = $end_day + $end_time;
		//$centro=intval(htmlspecialchars($POST["centro"]));

		// prevent double booking
		$sql = "SELECT * FROM $tablename WHERE item='$item' AND (start_day>=$start_day OR end_day>=$start_day) AND canceled=0";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			// handle every row
			while ($row = mysqli_fetch_assoc($result)) {
				// check overlapping at 10 minutes interval
				for ($i = $start_epoch; $i <= $end_epoch; $i = $i + 600) {
					if ($i > ($row["start_day"] + $row["start_time"]) && $i < ($row["end_day"] + $row["end_time"])) {
						echo '<h3><font color="red">Unfortunately ' . $item . ' has already been booked for the time requested.</font></h3>';
						goto end;
					}
				}
			}
		}

		$sql = "INSERT INTO $tablename ( `item`, `start_day`, `start_time`, `end_day`, `end_time`, `id_usuario`,`canceled`,`Estado_Reserva`) VALUES ('$item', '$start_day', '$start_time', '$end_day', '$end_time','$usuario', 0,1)";
		if (mysqli_query($conn, $sql)) {
			echo "<h3>Reservado con exito.</h3>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		end: mysqli_close($conn);
	}
	?>

	<a href="index.php">
		<p>Regresar al calendario de reserva</p>
	</a>

</body>

</html>