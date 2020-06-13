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
        $who1 = $_POST["who1"];
        $who2 = $_POST["who2"];
        $who3 = $_POST["who3"];
        $client1 = $_POST["client1"];
        $client2 = $_POST["client2"];
        $client3 = $_POST["client3"];

        // Add new user
        $sql = "UPDATE sobre SET title='$title', subtitle='$subtitle', client1='$client1', client2='$client2', client3='$client3', who1='$who1', who3='$who3', who2='$who2'  WHERE id=1";

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