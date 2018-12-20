<?php
include 'connect.php';
// Chart1
$chart1_e = $conn->query("SELECT duty FROM cases WHERE duty='ดึก'");
$num_crt1_e = $chart1_e->rowCount();
$chart1_m = $conn->query("SELECT duty FROM cases WHERE duty='เช้า'");
$num_crt1_m = $chart1_m->rowCount();
$chart1_n = $conn->query("SELECT duty FROM cases WHERE duty='บ่าย'");
$num_crt1_n = $chart1_n->rowCount();
// Chart1 END //
?>


window.onload = function() {
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "แผนภูมิสถิติอุบัติเหตุทางจราจร ภายในพื้นที่มหาวิทยาลัยขอนแก่น แบ่งตามช่วงเวลา",
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
		toolTipContent: "{y} ครั้ง",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabelFontFamily: 'Kanit',
		indexLabel: "{label} - #percent %",
		dataPoints: [
			{ y: <?php echo $num_crt1_e ?>, label: "ดึก" },
			{ y: <?php echo $num_crt1_m ?>, label: "เช้า" },
			{ y: <?php echo $num_crt1_n ?>, label: "บ่าย" },
	
		]
	}]
});
chart.render();
}
