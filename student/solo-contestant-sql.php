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
        $id = $_REQUEST['category_id'];
        $roll = $_REQUEST['roll'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO contestant  VALUES (DEFAULT,'$id',NULL,'$roll')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>Added contestant.</h3>";

            echo nl2br("\n$id\n $roll");
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
