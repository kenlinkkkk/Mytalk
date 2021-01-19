<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<a href="sms://+15552345678;?&body=Hello%20World"></a>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function () {
			if (navigator.userAgent.indexOf("Android") !== -1) {
				window.open("sms://1048&body=XN%20P", "_blank");
				window.location.href = 'http://mytalk.vn';
				// window.open("sms://+15552345678;?&body=Hello%20World", "_blank");
				// $('#dk').attr("href", "sms:1048?body=XN P");
			} else if (navigator.userAgent.indexOf("like Mac") !== -1) {
				// window.open("http://mytalk.vn", "_blank");
				window.location.href = 'sms://1048&body=XN%20P';
				// window.open("sms:1048&body=XN P", "_blank");
				// $('#dk').attr("href", "sms:1048&body=XN P");
			} else {
				window.location.href = 'sms://1048?body=XN%20P';
				// window.open("http://mytalk.vn", "_blank");
				// window.open("sms:1048?body=XN P", "_blank");
			}
		});
	</script>
</body>
</html>
