<html>
    <head><title>Submission</title></head>
    <body>
        <?php  
            $name = $_POST["name"];
            $phone_num = $_POST["phone_num"];
            $conn = mysqli_connect("sql3.freesqldatabase.com", "sql3402886", "gn4yJmWUfg")
            if (!$conn) {  
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "INSERT INTO `Grocery`(`name`, `phone_num`) VALUES ('$name','$phone_num')"
            $results = mysqli_query($conn, $sql);
            if ($results)
                echo "The user has been added.";
            else{
                echo"NO!"
                echo mysqli_error($conn);
                mysqli_close($conn); 
            }
        ?>      
    </br>
    <a href="Registration.html">Login</a>
    </body>
</html>
