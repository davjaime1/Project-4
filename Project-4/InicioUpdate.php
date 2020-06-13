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
        $history1 = $_POST["history1"];
        $history2 = $_POST["history2"];

        // Add new user
        $sql = "UPDATE inicio SET title='$title', subtitle='$subtitle', history1='$history1', history2='$history2'  WHERE id=1";

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