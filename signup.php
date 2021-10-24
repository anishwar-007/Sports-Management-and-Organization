<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="heading">IIITDM Jabalpur Sports Manager</div>
    <div class="forming">
      <form action="student/add-member.php" method="post">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr />

          <label for="rollno"><b>Roll number</b></label>
          <input type="text" placeholder="Enter Institute Roll no." name="rollno" required />

          <label for="full_name"><b>Name</b></label>
          <input type="text" placeholder="Enter Your name" name="full_name" required />

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Instuitute Email address" name="email" required />

          <label for="psw"><b>Password</b></label>
          <input  type="password" placeholder="Enter Password" name="psw" required />

          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required/>

          <label for="age"><b>Age</b></label>
          <input type="number" placeholder="Enter Your Age" name="age" required />
          <br> <br>
          <label for="phone"><b>Contact Number</b></label>
          <input type="text" placeholder="Enter your contact number" name="phone" required />
            
          <label for="gender"><b>Gender</b></label>
          <input type="text" placeholder="male or female" name="gender" required />

          <label>
            <input  type="checkbox"  checked="checked"  name="remember"  style="margin-bottom: 15px"/> Remember me
          </label>


          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
    <div style=" margin-left: 500px;">
      <button onclick="document.getElementById('id01').style.display='block'" style="background-color: cyan; border-radius: 30px; width: 50%; color: black; margin-left: auto; margin-right: auto; font-weight: bolder;">Already a Member? Sign in now!</button>
    </div>

<!-- The Modal for the user -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action = "student/authentication.php" onsubmit = "return validation()" method = "POST">   <!-- Here will be the target to the next page -->
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container2">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" >Login</button>
      
    </div>
  </form>
</div>
    <div style="margin-left: 500px;">
      <button onclick="document.getElementById('id02').style.display='block'" style="background-color: cyan; border-radius: 30px; width: 50%; color: black; margin-left: auto; margin-right: auto; font-weight: bolder;">Hey ADMIN! Login here</button>
    </div>

<!-- The Modal for the admin -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="">  <!-- Here will be the target to the next page -->
    <div class="imgcontainer">
      <img src="admin-image.png" alt="Avatar" class="avatar">
    </div>

    <div class="container2">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" >Login</button>
      
    </div>
  </form>
</div>

  </body>
  <script>
    // Get the modal
    var modal1 = document.getElementById('id01');
    var modal2 = document.getElementById('id02');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal1) {
        modal.style.display = "none";
      }
    }
    window.onclick = function(event) {
      if (event.target == modal2) {
        modal.style.display = "none";
      }
    }
    </script>
</html>
