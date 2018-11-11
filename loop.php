<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>

<input type="button" name="btnGetJson" id="btnGetJson" value="Get Json">
<div id="content"></div>

<script type="text/javascript">
		$(document).ready(function() {
			
			$("#btnGetJson").click(function() {
					
					$.ajax({
					   type: "POST",
					   url: "getJson.php",
					   data: '',
					   success: function(result) {
							var content = '';
							$.each(result, function(i, item){ // loop..
								content = content + "Location : " + item.case_id +  ', Lat = ' + item.lat + ', Lng = ' + item.lng + ' <br>';
							}); // ..loop

							$('#content').html(content);
					   }
					 });

			});
	
		});
</script>

</body>
</html>