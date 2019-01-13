<?php include 'inc/header.php'; ?>

<?php
    if (isset($_SESSION['id'])) {
      echo $_SESSION['id'];
    } else{
      echo "You are not logged in!";
    }
  ?>

  <br><br>

  

<div class="col-sm-3 justify-content-center align-items-center my-5 container">
  <h6 class="mb-4 text-success">Please, fill out the form to make an account.</h6>

  <form>
  <div class="form-group">
    <div class="form-group">
      <label for="inputName">Your name</label>
      <input type="text" class="form-control" id="inputName" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
     <div class="form-group">
      <label for="inputPassword4">Retype password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <div class="form-group">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Serbia</option>
        <option>Latvia</option>
        <option>Belgium</option>
        <option>Canada</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  
</div>


<?php include 'inc/footer.php'; ?>