<html>
    <head><title>Submission</title></head>
    <body>
        <?php  
            $first_name = "ROCKY";
            $last_name = $_POST["last_name"];
            $password_encrypted = password_hash($_POST["password_encrypted"],PASSWORD_DEFAULT);
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $conn = mysqli_connect("sql3.freesqldatabase.com", "sql3402886", "gn4yJmWUfg","sql3402886");
            if (!$conn) {  
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "INSERT INTO customer (email, first_name, last_name, password_encrypted, phone) VALUES ('$email','$first_name','$last_name','$password_encrypted','$phone')";
            $results = mysqli_query($conn, $sql);
            if ($results)
                echo "Great! You're registered.";
            else{
                echo"Uh-oh, something went wrong on our end.";
                echo mysqli_error($conn);
                mysqli_close($conn); 
            }
        ?>      
    </br>
    <a href="Registration.html">Login</a>
    </body>
</html>
