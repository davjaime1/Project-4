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

        // Need to get primary key to increment 1
        $sql = 'SELECT MAX(id) from images';

        $result = $conn->query($sql);

        // No result
        if(!$result)
        {
            die('user_id not retrieved: ' . mysql_error());
        }

        if ($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            
            $id = $row['MAX(id)'] + 1;
        }
        else
        {
            echo "No results";
        }

        $type = $_POST["type"];
        $image = $_FILES['image']['name'];
        $image_text = mysqli_real_escape_string($conn, $_POST['image_text']);
        $target = "Resources/Images/".basename($image);

        $sql = "INSERT INTO images (id, image, image_text, type) VALUES ('$id', '$image', '$image_text', '$type')";

        mysqli_query($conn, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
        $conn->close();
        echo "<script type='text/javascript'> alert('Uploaded image'); document.location = 'AdminHomepage.php'; </script>";
    ?>
</body>
</html>