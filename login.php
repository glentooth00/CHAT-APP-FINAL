<?php 
session_start();
$pageTitle = 'Login';
require_once "assets/includes/header.php";
require_once 'vendor/autoload.php';

use Myapp\Source\DB\Database;
use Myapp\Source\Basemodels\Models;



// $check = new Database();
// $check->test();

// $check2 = new Models();
// $check2->test();
?>

<div class="container">


  <div class="error-div">
      <?php include 'sessions/session.php'; ?>
  </div>




    <div class="wrapper">
      <form action="#" method="post" class="login-form">
          <div class="username">
              <label>Username</label><br>
              <input type="text" name="username" value="" class="form-control">
          </div>
          <div class="password">
              <label>Password</label><br>
              <input type="password" name="username" value="" class="form-control">
          </div>
          <div class="div-btn">
            <button class="btn btn-primary w-50">Login</button>
          </div>
          <div class="div-link">
            <h5>Dont have an account yet?<a href="#" id="myBtn">Register here!!</a></h5><br>
            <h5><a href="#" id="myBtn">Forgoten your password?</a></h5>
          </div>
      </form>  
      
      <div class="content">
     
             <h1>SIMPLE CHAT WEB-APP</h1>
             <div>
                <img src="assets/images/main_image.jpg" class="main_image">
             </div>
          </div>
          

          <!-- The Modal -->
        <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Register</h2>
                  <div class="reg-form">
                      <form action="Controller/store.php" method="POST">
                          <div class="username">
                              <label>Username</label><br>
                              <input type="text" name="username" value="" class="form-control">
                          </div>
                          <div class="password">
                              <label>Password</label><br>
                              <input type="password" name="password" value="" class="form-control">
                          </div>
                          <div class="username">
                              <label>Firstname</label><br>
                              <input type="text" name="firstname" value="" class="form-control">
                          </div>
                          <div class="password">
                              <label>Lastname</label><br>
                              <input type="text" name="lastname" value="" class="form-control">
                          </div>
                          <div class="password">
                              <label>Gender</label><br>
                              <select  name="gender" value="" class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                              </select> 
                          </div>
                          <div class="submitBtn">
                              <button class="btn btn-primary">Submit</button>
                          </div>
                          <div class="cancel"><br>
                              <h5>Already have an account??<a href="login.php" class="cancel">Login now</a></h5>
                          </div>
                      </form>
                  </div>
            
            </div>   

  
      
  </div>

      

</div>

<script>
  // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<?php 

require_once "assets/includes/footer.php";

?>
