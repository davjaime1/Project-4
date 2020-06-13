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
        $password = $_POST["password"];
        $username = $_POST['username'];

        // Add new user
        $sql = "UPDATE users SET username='$username', password='$password' WHERE username='$username'";

        if ($conn->query($sql) === TRUE)
        {
            $conn->close();
            echo "<script type='text/javascript'> alert('Password updated'); document.location = 'UserHomepage.php'; </script>";
        }
        else
        {
            $conn->close();
            echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
            exit();
        }

    ?>
</body>
</html>