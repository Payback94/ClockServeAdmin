<?php
include_once('../api/config.php');

$currentDate = Date('Y-m-d H:i:s');
//select all the dates in a week
$weekDateSql = "Select attendance_day, attendance_date, COUNT(attendance_date) from attendance GROUP_BY attendance_date";
$weekdate = mysqli_query($conn, $weekDateSql);

$dataPoints = array(
	array("y" => 25, "label" => "Sunday"),
	array("y" => 15, "label" => "Monday"),
	array("y" => 25, "label" => "Tuesday"),
	array("y" => 5, "label" => "Wednesday"),
	array("y" => 10, "label" => "Thursday"),
	array("y" => 0, "label" => "Friday"),
	array("y" => 20, "label" => "Saturday")
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
