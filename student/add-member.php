<!DOCTYPE html>
<html>

<head>
    <title>Post Registration</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "sports");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $rollno = $_REQUEST['rollno'];
        $full_name =  $_REQUEST['full_name'];
        $email = $_REQUEST['email'];
        $gender =  $_REQUEST['gender'];
        $psw = $_REQUEST['psw'];
        $phone = $_REQUEST['phone'];
        $age = $_REQUEST['age'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO member  VALUES ('$rollno','$full_name',
            '$email','$psw','$phone','$gender','$age')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>Registration successful.</h3>";

            echo nl2br("\n$rollno\n $full_name\n $email\n $psw\n $phone\n $gender\n$age");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
