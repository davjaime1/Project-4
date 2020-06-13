<!doctype html>
<html>
<body>
    <?php
        // Connect
        $servername = "localhost";
        $username = "djj3612_admin";
        $password = "webdata1234";
        $database = "djj3612_ibras";

        // Connect
        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data
        $username = $_POST["username"];
        $password = $_POST["password"];

        $emailregex = "([A-Z]|[a-z]|[0-9])*@gmail.com";

        //PHP Validation
        if($username=="")
        {
            $conn->close();
            echo "<script type='text/javascript'> alert('Username is empty'); document.location = 'index.html'; </script>";
            exit();
        }
        else if($password=="")
        {
            $conn->close();
            echo "<script type='text/javascript'> alert('Password is empty'); document.location = 'index.html'; </script>";
            exit();
        }
        else{

            $sql = "SELECT role, password FROM users WHERE username='$username' AND password='$password'";

            $result = $conn->query($sql);

            // No result
            if(!$result)
            {
                die('user_id not retrieved: ' . mysql_error());
            }

            
            if ($result->num_rows > 0)
            {
                
                $row = $result->fetch_assoc();
                $role = $row['role'];
                $conn->close();
                if($role == "admin")
                {
                    echo "<script type='text/javascript'> document.location = 'AdminHomepage.php'; </script>";
                }
                else
                {
                    echo "<script type='text/javascript'> document.location = 'UserHomepage.php'; </script>";
                }
                
            }
            else
            {
                $conn->close();
                echo "<script type='text/javascript'> alert('Incorrect login info. Please try again'); document.location = 'index.php'; </script>";
            }
        }
    ?>
</body>
</html>