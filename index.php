<?php include 'inc/header.php'; ?>

<body>

	<section id="showcase">
		<div class="container">
			<div id="slider" class="carousel slide" data-ride="carousel">
				 <ol class="carousel-indicators">
				    <li data-target="#slider" data-slide-to="0" class="active"></li>
				    <li data-target="#slider" data-slide-to="1"></li>
				    <li data-target="#slider" data-slide-to="2"></li>
				  </ol>
				<div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="img/private_jet.jpg" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="img/private_jet2.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="img/private_jet3.jpg" alt="Third slide">
				    </div>
				</div>
		</div>

			<h1>Welcome!</h1>
			<h4>We grow. We help. We manage.</h4>
			<p>Learn how to become an airport manager.<br> Research the education requirements, training information,<br> and experience required for starting a career as an airport manager. </p>
		</div>
	</section>

	<section id="boxes">
				<div class="container mb-5">
				  <div class="row">
				    <div class="col-sm text-center">
				      <a href="https://finance.knect365.com/gad-world/?vip_code=FKN2537GOOGLE&gclid=EAIaIQobChMIo5u6_OLz3AIV2qSaCh0DTgdEEAAYASAAEgJ1rfD_BwE" target="_blank"><img src="img/events.jpeg" width="200" title="Events"></a>
						<h3>Events</h3>
						<p class="h5">Join us and see what we do</p>
				    </div>
				    <div class="col-sm text-center">
				      <a href="careers.php"><img src="img/careers.png" width="200" height="200" title="JavaScript"></a>
						<h3>Careers</h3>
						<p class="h5">Use your opportunity</p>
				    </div>
				    <div class="col-sm text-center">
				    	<a href="business strategy.php"><img src="img/business strategy.jpg" width="200" height="200" title="Business Strategy"></a>
						<h3>Business Strategy</h3>
						<p class="h5">Our vision</p>
				    </div>
				  </div>
				</div>
	
	</section>

	<div class="container_subscribe">
		<div class="login_bar">
    <input class="login" placeholder="Subscribe to our newsletter">
    <span class="subscribe_button" onclick="subscribeOnClick()">subscribe</span>
    <span class="subscribing"></span>
    <span class="thanks"> Thank you. You have been subscribed!</span>
  </div>
	</div>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

	<script>$('#slider').carousel({
  			interval: 4000
			});
	</script>

	 <script type="text/javascript">
  	
  	var subscribe_button = document.querySelector(".subscribe_button");

subscribe_button.addEventListener('click', function(){
	var subscribing = document.querySelector(".subscribing");
	var thanks = document.querySelector(".thanks");
	var login = document.querySelector(".login");

	subscribing.classList.add("subscribing_active");
	subscribe_button.classList.add("subscribe_button_active");
	setTimeout(function(){
		login.classList.add("login_active");
	}, 1200);
	setTimeout(function(){
		thanks.classList.add("thanks_active");
	}, 1400);

	setTimeout(function(){
		thanks.classList.remove("thanks_active");
		login.classList.remove("login_active");
		subscribing.classList.remove("subscribing_active");
		subscribe_button.classList.remove("subscribe_button_active");
	}, 4000);
});
  </script>

<?php include 'inc/footer.php'; ?>
	
		
</body>
</html>	