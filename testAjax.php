<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function (e) {
			$('#upload').on('click', function () {
				var form_data = new FormData();
				var ins = document.getElementById('multiFiles').files.length;
				for (var x = 0; x < ins; x++) {
					form_data.append("files[]", document.getElementById('multiFiles').files[x]);
				}
				$.ajax({
					url: 'php-multiple-files-upload.php', // point to server-side PHP script 
					dataType: 'text', // what to expect back from the PHP script
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,
					type: 'post',
					success: function (response) {
						$('#msg').html(response); // display success response from the PHP script
					},
					error: function (response) {
						$('#msg').html(response); // display error response from the PHP script
					}
				});
			});
		});
	</script>
</head>
<body>
	<p id="msg"></p>
	<input type="file" id="multiFiles" name="files[]" multiple="multiple"/>
	<button id="upload">Upload</button>  
</body>
</html>