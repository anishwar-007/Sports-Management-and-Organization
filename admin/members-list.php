
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
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sports";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT solo_id_roll,name,email,phone,gender,age FROM member";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Roll no: " . $row["solo_id_roll"]. "<br>"."Name: " . $row["name"]. "<br>"."Email: " . $row["email"]. "<br>"."Phone: " . $row["phone"]. "<br>"."Gender: " . $row["gender"]. "<br>"."Age: " . $row["age"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
    </div>


  </body>
</html>
