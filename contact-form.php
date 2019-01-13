    
<?php
	session_start();
?>
<?php include 'inc/header.php'; ?>

    <?php
		if (isset($_SESSION['id'])) {
			echo $_SESSION['id'];
		} else{
			echo "You are not logged in!";
		}
	?>

    <?php
      if(isset($_POST['submit'])){
        $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
        $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
        $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
        $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
        if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
          $name_error = 'Invalid name';
        }
        if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
          $subject_error = 'Invalid subject';
        }
        if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
          $email_error = 'Invalid email';
        }
        if(strlen($message) === 0){
          $message_error = "<p style='color: red' class='text-center'>Your message field should not be empty</p>";
        }
      }
    ?>
 
    <div class="col-sm-3 justify-content-center align-items-center my-5 text-center container">
  	<h1 class="mb-4 text-center">Send us an e-mail</h1>
   
    <form class="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      
      <div class="form-group">
      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
      <p><?php if(isset($email_error)) echo $email_error; ?></p>
      </div>
     
     <div class="form-group">
      <textarea name="message" rows="6" cols="60" class="form-control" placeholder="Message"></textarea>
      <p><?php if(isset($message_error)) echo $message_error; ?></p>

      <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm">Send</button>
      </div>
	</form><br>
	<h3>Contact us:</h3>
		<p>+123 456 78900<br>
		amanager@gmail.com</p>
	</div>


      <?php 
        if(isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
          $to = 'vsimke@hotmail.com'; // edit here
          $body = " Name: $name\n E-mail: $email\n Message:\n $message";
          if(mail($to, $subject, $body)){
            echo '<p style="color: green" class="text-center">Message sent</p>';
          }else{
            echo '<p style="color: red" class="text-center">Error occurred, please try again later</p>';
          }
        }
      ?>
    </div>


<?php include 'inc/footer.php'; ?>
    