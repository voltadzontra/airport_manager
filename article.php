<?php
	include 'inc/header.php';
?>

<div class="article-container">
	<?php

		$title = mysqli_real_escape_string($conn, $_GET['title']);
		$date = mysqli_real_escape_string($conn, $_GET['date']);

		$sql = "SELECT * FROM article WHERE am_title='$title' AND am_date='$date'";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='article-box'>
					<h3>".$row['am_title']."</h3>
					<p>".$row['am_text']."</p>
					<p>".$row['am_date']."</p>
					<p>".$row['am_author']."</p>
				</div>";
			}
		}
	?>
	
</div>

</body>
</html>