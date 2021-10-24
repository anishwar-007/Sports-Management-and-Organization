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
        $sname = $_REQUEST['sname'];


        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO sports  VALUES ('$sname')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>Adding Sport successful.</h3>";

            echo nl2br("\n$sname");
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
