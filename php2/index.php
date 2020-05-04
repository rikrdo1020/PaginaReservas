<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<style>
		<?php
		// Verificamos la conexión con el servidor y la base de datos
		$mysqli = new mysqli('localhost', 'root', '', 'reservascourt2');
		?>html * {
			font-family: Arial !important;
			*/
		}

		table.calendar {
			border-left: 1px solid #999;
		}

		tr.calendar-row {}

		td.calendar-day {
			min-height: 80px;
			font-size: 11px;
			position: relative;
			vertical-align: top;
		}

		* html div.calendar-day {
			height: 80px;
		}

		td.calendar-day:hover {
			background: #eceff5;
		}

		td.calendar-day-np {
			background: #eee;
			min-height: 80px;
		}

		* html div.calendar-day-np {
			height: 80px;
		}

		td.calendar-day-head {
			background: #ccc;
			font-weight: bold;
			text-align: center;
			width: 120px;
			padding: 5px;
			border-bottom: 1px solid #999;
			border-top: 1px solid #999;
			border-right: 1px solid #999;
		}

		div.day-number {
			background: #999;
			padding: 5px;
			color: #fff;
			font-weight: bold;
			float: right;
			margin: -5px -5px 0 0;
			width: 20px;
			text-align: center;
		}

		td.calendar-day,
		td.calendar-day-np {
			width: 120px;
			padding: 5px;
			border-bottom: 1px solid #999;
			border-right: 1px solid #999;
		}
	</style>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Booking calendar - DEMO</title>
	<link href="jquery-ui.css" rel="stylesheet">

	<!-- CUSTOM CSS-->
	<link rel="stylesheet" href="style.css">
	<!-- FONTAWESOME-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- PT SANS FONT -->
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

	<script src="jquery-1.10.2.js"></script>
	<script src="jquery-ui.js"></script>


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!--<script src="lang/datepicker-fi.js"></script>-->
	<script>
		$(function() {
			<
			!--$.datepicker.setDefaults($.datepicker.regional['fi']);
			-- >
			$("#from").datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 3,
				onClose: function(selectedDate) {
					$("#to").datepicker("option", "minDate", selectedDate);
				}
			});
			$("#to").datepicker({
				defaultDate: "+1w",
				regional: "fi",
				changeMonth: true,
				numberOfMonths: 3,
				onClose: function(selectedDate) {
					$("#from").datepicker("option", "maxDate", selectedDate);
				}
			});
		});
	</script>
</head>

<body>
	<div class="titulo">
		<div class="titulo container text-center py-5">
			<h1 class="display-3 text-white">Calendario de Reservas</h1>
			<h2 class="h5 text-white">Centro Deportivo B</h2>
			<h3 class="h5 text-white">Chiriqui</h3>
		</div>
	</div>


	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<a class="navbar-brand text-white" href='http://localhost:82/php3/formulario.php'>Usuario Nuevo</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link text-white" href='http://localhost/php2/index.php'>Centro Deportivo A<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link text-white" href='http://localhost/php2/indexB.php'>Centro Deportivo B</a>
				</li>
			</ul>
			<form action="createReport.php" method="post">
				<input class="btn btn btn-info my-2 my-sm-0" type="submit" name="centroA" value="Descargar Informe" />
			</form>
			<!-- <button class="btn btn btn-info my-2 my-sm-0" type="submit">Descargar Informe</button> -->

		</div>
	</nav>

	<hr class="mb-4">
	<div class="container">









		<div class="row">
			<div class="col-md-4 order-md-2 mb-4">
				<h4d-flex justify-content-between align-items-center mb-3>CANCELAR RESERVACION</h4>
					<form action="cancel.php" method="POST"">
					  <div class=" input-group">
						<input name="id" required="" type="text" class="form-control" />
						<div class="input-group-append">
							<button type="submit" class="btn btn-secondary bg-danger">Cancelar</button>
						</div>
			</div>

			<!--<p class="cancel"><input name="cancel" type="submit" value="Cancel" /></p> -->
			</form>

		</div>

		<div class="col-md-8 order-md-1">
			<H4 class="mb-3">RESERVAR</H4>
			<form action="book.php" method="POST">

				<div class="form-group">
					<label for="exampleFormControlInput1">Tipo de cancha</label>
					<p class="radio-box">
						<Label class="label-container">Fulbito
							<input checked="checked" name="item" type="radio" value="1" />
							<span class="checkmark"></span>
						</Label>
						<Label class="label-container">Basket
							<input name="item" type="radio" value="2" />
							<span class="checkmark"></span>
						</Label>
						<Label class="label-container">Baseball
							<input name="item" type="radio" value="3" />
							<span class="checkmark"></span>
						</Label>
						<Label class="label-container">Tennis
							<input name="item" type="radio" value="4" />
							<span class="checkmark"></span>
						</Label>
					</p>
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Tiempo de Reservacion</label>
					<p>
						<input id="from" name="start_day" required="" type="text" />
						<Label> - </Label>
						<input id="to" name="end_day" required="" type="text" />
					</p>
					<p>
						<select name="start_hour">
							<option selected="selected">00</option>
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
						</select>:<select name="start_minute">
							<option selected="selected">00</option>
							<option>30</option>
						</select>

						<select name="end_hour">
							<option>00</option>
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option selected="selected">23</option>
						</select>:<select name="end_minute">
							<option>00</option>
							<option selected="selected">30</option>
						</select>
					</p>

				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect2">USUARIO</label>
					<select name="usuario" class="form-control">
						<option value="0">Seleccione:</option>
						<?php
						// Realizamos la consulta para extraer los datos
						$query = $mysqli->query("SELECT * FROM usuario_view");
						while ($valores = mysqli_fetch_array($query)) {
							// En esta sección estamos llenando el select con datos extraidos de una base de datos.
							echo '<option value="' . $valores[id_usuario] . '">' . $valores[nombre_completo] . '</option>';
						}
						?>
					</select>
				</div>
				<hr class="mb-4">
				<button class="btn btn-primary btn-lg btn-block bg-success" type="submit">Book</button>
				<!--<p class="btn-book">-->
				<!--	<input name="book" type="submit" value="Book" /> -->
				<!--</p> -->

			</form>
		</div>
	</div>


	<hr>


	<?php
	/* draws a calendar */
	function draw_calendar($month, $year)
	{

		include 'config.php';

		// Create connection
		$conn = mysqli_connect($servername, $username, $password,  $dbname);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		/* draw table */
		$calendar = '<table cellpadding="0" cellspacing="0" class="calendar table table-bordered">';

		/* table headings */
		$calendar .= '<tr class="calendar-row"><td class="calendar-day-head">' . implode('</td><td class="calendar-day-head">', $headings) . '</td></tr>';

		/* days and weeks vars now ... */
		$running_day = date('w', mktime(0, 0, 0, $month, 1, $year));
		$days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
		$days_in_this_week = 1;
		$day_counter = 0;
		$dates_array = array();

		/* row for week one */
		$calendar .= '<tr class="calendar-row">';

		/* print "blank" days until the first of the current week */
		for ($x = 0; $x < $running_day; $x++) :
			$calendar .= '<td class="calendar-day-np"> </td>';
			$days_in_this_week++;
		endfor;

		/* keep going with days.... */
		for ($list_day = 1; $list_day <= $days_in_month; $list_day++) :
			$calendar .= '<td class="calendar-day">';
			/* add in the day number */
			$calendar .= '<div class="day-number">' . $list_day . '</div>';

			/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
			$calendar .= str_repeat('<p> </p>', 2);
			$current_epoch = mktime(0, 0, 0, $month, $list_day, $year);

			$sql = "SELECT * FROM reservas_view WHERE $current_epoch BETWEEN start_day AND end_day AND id_ubicacion=4";

			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while ($row = mysqli_fetch_assoc($result)) {
					if ($row["canceled"] == 1) $calendar .= "<font color=\"grey\"><s>";
					$calendar .= "<b>" . $row["nombre_cancha"] . "</b><br>ID: " . $row["id"] . "<br>" . $row["nombre_completo"] . "<br>" . $row["telefono"] . "<br>";
					if ($current_epoch == $row["start_day"] and $current_epoch != $row["end_day"]) {
						$calendar .= "Inicia: " . sprintf("%02d:%02d", $row["start_time"] / 60 / 60, ($row["start_time"] % (60 * 60) / 60)) . "<br><hr><br>";
					}
					if ($current_epoch == $row["start_day"] and $current_epoch == $row["end_day"]) {
						$calendar .= "inicia: " . sprintf("%02d:%02d", $row["start_time"] / 60 / 60, ($row["start_time"] % (60 * 60) / 60)) . "<br>";
					}
					if ($current_epoch == $row["end_day"]) {
						$calendar .= "Finaliza: " . sprintf("%02d:%02d", $row["end_time"] / 60 / 60, ($row["end_time"] % (60 * 60) / 60)) . "<br><hr><br>";
					}
					if ($current_epoch != $row["start_day"] and $current_epoch != $row["end_day"]) {
						$calendar .= "Booking: 24h<br><hr><br>";
					}
					if ($row["canceled"] == 1) $calendar .= "</s></font>";
				}
			} else {
				$calendar .= "No bookings";
			}

			$calendar .= '</td>';
			if ($running_day == 6) :
				$calendar .= '</tr>';
				if (($day_counter + 1) != $days_in_month) :
					$calendar .= '<tr class="calendar-row">';
				endif;
				$running_day = -1;
				$days_in_this_week = 0;
			endif;
			$days_in_this_week++;
			$running_day++;
			$day_counter++;
		endfor;

		/* finish the rest of the days in the week */
		if ($days_in_this_week < 8) :
			for ($x = 1; $x <= (8 - $days_in_this_week); $x++) :
				$calendar .= '<td class="calendar-day-np"> </td>';
			endfor;
		endif;

		/* final row */
		$calendar .= '</tr>';

		/* end the table */
		$calendar .= '</table>';

		mysqli_close($conn);

		/* all done, return result */
		return $calendar;
	}

	include 'config.php';


	$d = new DateTime(date("Y-m-d"));
	echo '<h3>' . $months[$d->format('n') - 1] . ' ' . $d->format('Y') . '</h3> <br>';
	echo draw_calendar($d->format('m'), $d->format('Y'));
	echo '<br><br>';

	for ($i = 0; $i < 11; $i++) {
		$d->modify('first day of next month');
		echo '<h3>' . $months[$d->format('n') - 1] . ' ' . $d->format('Y') . '</h3><br>';
		echo draw_calendar($d->format('m'), $d->format('Y'));
		echo '<br><br>';
	}


	// $d->modify('first day of next month');
	// echo '<h3>' . $months[$d->format('n') - 1] . ' ' . $d->format('Y') . '</h3>';
	// echo draw_calendar($d->format('m'), $d->format('Y'));

	// $d->modify('first day of next month');
	// echo '<h3>' . $months[$d->format('n') - 1] . ' ' . $d->format('Y') . '</h3>';
	// echo draw_calendar($d->format('m'), $d->format('Y'));

	// $d->modify('first day of next month');
	// echo '<h3>' . $months[$d->format('n') - 1] . ' ' . $d->format('Y') . '</h3>';
	// echo draw_calendar($d->format('m'), $d->format('Y'));

	?>

</body>

</html>