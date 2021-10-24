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
        $sname =  $_REQUEST['sname'];
        $cname =  $_REQUEST['cname'];
        $gender =  $_REQUEST['gender'];
        $tsize = $_REQUEST['tsize'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO category  VALUES ('$id','$sname',
            '$cname','$gender','$tsize')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>Added category.</h3>";

            echo nl2br("\n$id\n $sname\n $cname\n $gender\n$tsize");
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
