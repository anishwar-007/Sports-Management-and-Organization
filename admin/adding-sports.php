<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../style2.css">
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
      <form action="add-sports.php" method="post">
        <div class="container">
          <h1>Add a new Sport</h1>
          <p>Please fill in this form to add an Sport.</p>
          <hr />

          <label for="sports-name"><b>Sports Name</b></label>
          <input type="text" placeholder="Enter Sport's name." name="sname" required />

          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Add Sports</button>
          </div>
        </div>
      </form>
    </div>
</html>
