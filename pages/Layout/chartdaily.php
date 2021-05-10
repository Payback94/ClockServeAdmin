<?php
include_once('../api/config.php');

$currentDate = Date('Y-m-d H:i:s');
//select all the dayas in a week
$SundaySql = "Select attendance_day, emp_id from attendance where attendance_day='Sunday'";
$SundayQuery = mysqli_query($conn, $SundaySql);
$SundayCount = mysqli_num_rows($SundayQuery);

$MondaySql = "Select attendance_day, emp_id from attendance where attendance_day='Monday'";
$MondayQuery = mysqli_query($conn, $MondaySql);
$MondayCount = mysqli_num_rows($MondayQuery);

$TuesdaySql = "Select attendance_day, emp_id from attendance where attendance_day='Tuesday'";
$TuesdayQuery = mysqli_query($conn, $TuesdaySql);
$TuesdayCount = mysqli_num_rows($TuesdayQuery);

$WednesdaySql = "Select attendance_day, emp_id from attendance where attendance_day='Wednesday'";
$WednesdayQuery = mysqli_query($conn, $WednesdaySql);
$WednesdayCount = mysqli_num_rows($WednesdayQuery);

$ThursdaySql = "Select attendance_day, emp_id from attendance where attendance_day='Thursday'";
$ThursdayQuery = mysqli_query($conn, $ThursdaySql);
$ThursdayCount = mysqli_num_rows($ThursdayQuery);

$FridaySql = "Select attendance_day, emp_id from attendance where attendance_day='Friday'";
$FridayQuery = mysqli_query($conn, $FridaySql);
$FridayCount = mysqli_num_rows($FridayQuery);

$SaturdaySql = "Select attendance_day, emp_id from attendance where attendance_day='Saturday'";
$SaturdayQuery = mysqli_query($conn, $SaturdaySql);
$SaturdayCount = mysqli_num_rows($SaturdayQuery);

$dataPoints = array(
	array("y" => $SundayCount, "label" => "Sunday"),
	array("y" => $MondayCount, "label" => "Monday"),
	array("y" => $TuesdayCount, "label" => "Tuesday"),
	array("y" => $WednesdayCount, "label" => "Wednesday"),
	array("y" => $ThursdayCount, "label" => "Thursday"),
	array("y" => $FridayCount, "label" => "Friday"),
	array("y" => $SaturdayCount, "label" => "Saturday")
);
?>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Attendance this week"
	},
	axisY: {
		title: "Number of Attendance"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
