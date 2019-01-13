<?php include 'inc/header.php'; ?>
<br><br>
<body>
	<div class="container text-center">
			<h1>No open positions.</h1>
			<p>We're sorry, currently we don't have open job positions.<br> If you want to become a member of our team, please upload your CV with photo.</p>
			<small>Please, note that your file should not be greater than 5MB.<br> Upload only JPG, JPEG, PNG or PDF file.</small>
	</div>
	<br><br>

	<div class="container text-center">
	<form action="inc/upload.inc.php" method="POST" enctype="multipart/form-data"></form>
	<input type="file" name="file">
	<button type="submit" name="submit" class="btn btn-primary btn-sm">Upload</button>
	</div>

</body>
<br><br><br>



<?php include 'inc/footer.php'; ?>