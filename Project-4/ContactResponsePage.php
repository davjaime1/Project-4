<!doctype html>
<html>
<body>
    <?php
        // Get form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        //Have it sending to this email
        $to_email = 'davjaime1@gmail.com';
        $headers = "From: '$email'\r\n";

        mail($to_email,$subject,$message,$headers);
        
        echo "<script type='text/javascript'> document.location = 'Contact.html'; alert('Your message has been sent');</script>";
    ?>
</body>
</html>