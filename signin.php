<?php include 'inc/header.php'; ?>

<?php
	$msg = '';
	$msgClass = '';

	if(filter_has_var(INPUT_POST, 'submit')){
		$name = $_POST['name'];
		$email = $_POST['email'];

		if(!empty($email) && !empty($name)){
			//Passed
			echo 'PASSED';
		} else{
			//Failed
			$msg = 'Fill out';
			$msgClass = 'alert-danger';
		}
	}
?>

<div class="col-sm-4 justify-content-center align-items-center my-5 container">
	<?php if ($msg != ''): ?>
		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
	<?php endif; ?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" data-toggle="validator" role="form">
	    <div class="form-group">
	      <label for="inputEmail" class="control-label">Email:</label>
	      	<input type="email" class="form-control" id="inputEmail" placeholder="" data-error="You must type your email." required>
	      	<div class="help-block with-errors"></div>
	    </div>
	    <div class="form-group">
	      <label for="inputPassword" class="control-label  mt-2">Password:</label>
	      	<div class="form-inline row">
		      <div class="form-group col-sm-6 mt-3">
		        <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
		        <small class="help-block">Minimum 6 characters</small>
		      </div>
	    <div class="form-group col-sm-6">
	      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
	      <div class="help-block with-errors"></div>
	    </div>
	    </div>
	  </div>
	    <button type="submit" name=" submit" value="submit" class="btn btn-primary">Login</button>
	 </form>
 </div>

 <div class="container d-flex justify-content-center">
	 <div class="register">
	 	<p>You don't have an account yet? Register <a href="register.php">here</a>!</p>
	 </div>
 </div>

<?php include 'inc/footer.php'; ?>