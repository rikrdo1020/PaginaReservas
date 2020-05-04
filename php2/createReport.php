<?php
$centroA = $_POST['centroA'];
$centroB = $_POST['centroB'];
$centro = "indefinido";

if (isset($centroA)){
    global $centro;
    $centro="4";
}else if(isset($centroB)){
    global $centro;
    $centro="8";
}

if($centro== "indefinido"){
    echo "<h1>ERROR!!</h1>";
}

function draw_calendar($month, $year)
{

    include 'config.php';
    global $centro;
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,  $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    /* draw table */
    $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

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



        $sql = "SELECT * FROM reservas_view WHERE $current_epoch BETWEEN start_day AND end_day AND id_ubicacion= $centro";

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

require_once __DIR__ . '/vendor/autoload.php';



$stylesheet = file_get_contents('calendar.css');
$months = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);


$data = "";
$centroStr = "INDEFINIDO";

if ($centro == "4") {
    $centroStr = "A";
} else if($centro == "8") {
    $centroStr = "B";
}

$data .= '<h1> Reporte de Centro deportivo ' . $centroStr . '</h1><br><br>';

$d = new DateTime(date("Y-m-d"));
$data .= '<h3>' . $months[$d->format('n') - 1] . ' ' . $d->format('Y') . '</h3> <br>';
$data .= draw_calendar($d->format('m'), $d->format('Y'));
$data .= '<br><br>';

for ($i = 0; $i < 11; $i++) {
    $d->modify('first day of next month');
    $data .= '<h3>' . $months[$d->format('n') - 1] . ' ' . $d->format('Y') . '</h3><br>';
    $data .= draw_calendar($d->format('m'), $d->format('Y'));
    $data .= '<br><br>';
}


$mpdf->WriteHTML($data);

$mpdf->Output("Reporte.pdf", 'D');
