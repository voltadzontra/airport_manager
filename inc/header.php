<?php
	include 'dbhsearch.php';
?>


<!DOCTYPE html>
<?php error_reporting(0); ?>
<html lang="en" class="no-js">
<head>
	<title>Airport Manager</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="reset.css"> <!-- CSS reset -->
   <link rel="stylesheet" href="style.css"> <!-- Resource style -->
   <script src="js/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		
	

	<style>
		@import url('https://fonts.googleapis.com/css?family=Titillium+Web:400,600');
		@import url('https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:300,400');
	</style>
</head>
<header>
		<div class="container">
			<div id="branding">
				<a href="index.php"><img src="img/airport manager logo.png" height="130"></a>
			</div>
			
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="contact-form.php">Contact</a></li>
					<li><a href="faq.php">FAQ</a></li>
					
					<!-- Button trigger modal -->
					<button 
					type="button"
					class="btn btn-primary btn-sm"
					data-toggle="modal"
					data-target="#signin">
    				SIGN IN / REGISTER
  					</button>

  					<!-- Modal -->
					<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="signin" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="signin">Sign In or Register</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	If you already have an account, please <a href="signin.php">sign in</a>.<br>
					        If you are new here, please <a href="register.php">register</a>.
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
				</ul>
				

					<div id="wrap">
					  <form action="search.php" method="POST" autocomplete="on">
					  <input id="search" name="search" type="text" placeholder="Type and hit Enter">
					  <input id="search_submit" value="search" type="submit" name="submit-search">
					  </form>
					</div>		
			</nav>

		</div>

	</header>
