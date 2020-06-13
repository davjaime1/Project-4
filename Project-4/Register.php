<!doctype html>
<html>
<body>
    <?php
        $servername = "localhost";
        $username = "djj3612_admin";
        $password = "webdata1234";
        $database = "djj3612_ibras";

        // Connect
        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Need to get primary key to increment 1
        $sql = 'SELECT MAX(user_id) from users';

        $result = $conn->query($sql);

        // No result
        if(!$result)
        {
            die('user_id not retrieved: ' . mysql_error());
        }

        if ($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            
            $user_id = $row['MAX(user_id)'] + 1;
        }
        else
        {
            echo "No results";
        }

        // Get form data
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $reppass = $_POST["reppass"];
        $address = $_POST["address"];

        

        $emailregex = "([A-Z]|[a-z]|[0-9])*@gmail.com";
        //PHP Validation
        if($username=="")
        {
            $conn->close();
            echo "<script type='text/javascript'> alert('Username is empty'); document.location = 'index.html'; </script>";
            exit();
        }
        else if($email=="")
        {
            $conn->close();
            echo "<script type='text/javascript'> alert('Email is empty'); document.location = 'index.html'; </script>";
            exit();
        }
        else if($password=="")
        {
            $conn->close();
            echo "<script type='text/javascript'> alert('Password is empty'); document.location = 'index.html'; </script>";
            exit();
        }
        else if($reppass=="")
        {
            $conn->close();
            echo "<script type='text/javascript'> alert('Repeat Password is empty'); document.location = 'index.html'; </script>";
            exit();
        }
        else if($address=="")
        {
            $conn->close();
            echo "<script type='text/javascript'> alert('Address is empty'); document.location = 'index.html'; </script>";
            exit();
        }
        else if(preg_match($emailregex, $email))
        {
            $conn->close();
            echo "<script type='text/javascript'> alert('Email does not contain @gmail.com'); document.location = 'index.html'; </script>";
            exit();
        }
        else if($password!=$reppass)
        {
            $conn->close();
            echo "<script type='text/javascript'> alert('Paswords are not the smae'); document.location = 'index.html'; </script>";
            exit();
        }
        else{

            
            // Add new user
            $sql = "INSERT INTO users (user_id, username, email, password, address, role) VALUES ( '$user_id' , '$username' , '$email', '$password', '$address', 'user')";

            if ($conn->query($sql) === TRUE)
            {
                $conn->close();
                //Have it sending to this email
                $subject = "Ibras Account Creation";
                $message = "Thank you for registering an account with Ibras.\r\nYou can login here: http://djj3612.uta.cloud/Jaime_ciudad/index.html\r\nJust click Iniciar Session, you can find the link on any page.";
                //$from_email = "From: david.jaime@mavs.uta.edu\r\n";

                mail($email,$subject,$message);
                echo "<script type='text/javascript'> document.location = 'UserHomepage.php'; </script>";
            }
            else
            {
                $conn->close();
                echo "<script type='text/javascript'> document.location = 'index.html'; </script>";
                exit();
            }
        }
        ?>
</body>
</html>