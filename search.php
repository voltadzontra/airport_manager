<?php
	include 'inc/header.php';
?>



<div class="article-container">
	<?php
		if (isset($_POST['submit-search'])){
			$search = mysqli_real_escape_string($conn, $_POST['search']);
			$sql = "SELECT * FROM article WHERE am_title LIKE '%$search%' OR am_text LIKE '%$search%' OR am_author LIKE '%$search%' OR am_date LIKE '%$search%'";

			$result = mysqli_query($conn, $sql);
			$queryResult = mysqli_num_rows($result);

			echo "<p class='h5 my-5 text-success text-center'><strong>There are ".$queryResult." results.</strong></p>";

			if ($queryResult > 0) {
				while($row = mysqli_fetch_assoc($result)){
					echo "<a href='article.php?title=".$row['am_title']."&date=".$row['am_date']."'><div class='article-box'>
					<h3>".$row['am_title']."</h3>
					<p>".$row['am_date']."</p>
					<p>".$row['am_author']."</p>
				</div></a>";
				}
			} else{ 

				echo "<div class='wrap'>
				  <i class='fa fa-search search-1'></i>
				  <i class='fa fa-search search-2'></i>
				  <i class='fa fa-search search-3'></i>
				  <i class='fa fa-search search-4'></i>
				  <div class='items'>
				    <i class='fa fa-file-o'></i>
				    <i class='fa fa-file-archive-o'></i>
				    <i class='fa fa-file-audio-o'></i>
				    <i class='fa fa-file-code-o'></i>
				    <i class='fa fa-file-excel-o'></i>
				    <i class='fa fa-file-image-o'></i>
				    <i class='fa fa-file-pdf-o'></i>
				    <i class='fa fa-file-powerpoint-o'></i>
				    <i class='fa fa-file-video-o'></i>
				    <i class='fa fa-file-word-o'></i>
				  </div>
				</div><br><br>
				<h2 class='text-center text-danger'>No results</h2>
				<p class='text-center'><em>We searched far and wide and couldn't <br/>find anyone matching your search.</em></p>";
							}
						}

	?>

</div>
<br><br><br><br>

<?php
	include 'inc/footer.php';
?>