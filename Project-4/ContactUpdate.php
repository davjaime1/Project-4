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
        $title = $_POST["title"];
        $subtitle = $_POST["subtitle"];

        // Add new user
        $sql = "UPDATE contact SET title='$title', subtitle='$subtitle'  WHERE id=1";


        if ($conn->query($sql) === TRUE)
        {
            $conn->close();
            echo "<script type='text/javascript'> document.location = 'AdminHomepage.php'; </script>";
        }
        else
        {
            $conn->close();
            echo "<script type='text/javascript'> document.location = 'index.html'; </script>";
            exit();
        }

    ?>
</body>
</html>