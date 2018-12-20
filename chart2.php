<?php
include 'connect.php';
// Chart1
$chart2_student = $conn->query("SELECT type_suff FROM sufferer WHERE type_suff ='นักศึกษา'");
$student = $chart2_student->rowCount();
$chart2_employ = $conn->query("SELECT type_suff FROM sufferer WHERE type_suff ='บุคลากร'");
$employ = $chart2_employ->rowCount();
$chart2_people = $conn->query("SELECT type_suff FROM sufferer WHERE type_suff ='บุคคลภายนอก'");
$people = $chart2_people->rowCount();
// Chart1 END //
?>


window.onload = function() {
var chart = new CanvasJS.Chart("chart2", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "แผนภูมิเปอร์เซนต์เปรียบเทียบสถิติอุบัติเหตุทางจราจร ภายในพื้นที่มหาวิทยาลัยขอนแก่น ประเภทบุคคล",
		fontFamily: 'Kanit',
		horizontalAlign: "center"
	},
	legend: {
       fontFamily: "Kanit"
	},
	toolTip:{
  fontFamily: "Kanit",
 },
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "{y} คน",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabelFontFamily: 'Kanit',
		indexLabel: "{label} - #percent %",
		dataPoints: [
			{ y: <?php echo $student ?>, label: "นักศึกษา" },
			{ y: <?php echo $employ ?>, label: "บุคลากร" },
			{ y: <?php echo $people ?>, label: "บุคคลภายนอก" },
	
		]
	}]
});
chart.render();
}
