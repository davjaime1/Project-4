<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Home Page</title>
      <link rel="stylesheet" type="text/css" href="Resources/CSS/ciudad.css">
      <link rel="stylesheet" type="text/css" href="Resources/CSS/AboutUs.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="Resources/CSS/AboutUs.css">
      <script>
         function validateLoginForm()
        {
           var username = document.forms["LoginForm"]["username"].value;
           var password = document.forms["LoginForm"]["password"].value;

           

           const regex = RegExp('^[A-Z]|[a-z]{8,10}$');

           if (username == "") {
              alert("Username field cannot be empty");
              return false;
           }
           else if(password == ""){
               alert("Password field cannot be empty");
              return false;
           }
           else
           {
               return true;
           }
        }
        function validateRegisterForm()
        {
           var username = document.forms["RegisterForm"]["username"].value;
           var email = document.forms["RegisterForm"]["email"].value;
           var password = document.forms["RegisterForm"]["password"].value;
           var reppass = document.forms["RegisterForm"]["reppass"].value;
           var address = document.forms["RegisterForm"]["address"].value;

           

           const regex = RegExp('^[A-Z]|[a-z]{8,10}$');
           const regex2 = RegExp('^[A-Z]|[a-z]|[0-9]@gmail.com$');

           if (username == "") {
              alert("Username field cannot be empty");
              return false;
           }
           else if(email == ""){
               alert("Email field cannot be empty");
              return false;
           }
           else if(password == ""){
               alert("Password field cannot be empty");
              return false;
           }
           else if(reppass == ""){
               alert("Repeat Password field cannot be empty");
              return false;
           }
           else if(address == ""){
               alert("Address field cannot be empty");
              return false;
           }
           else if(!password.test(regex))
           {
               alert("Password field must be between 8 and 10 charachters long");
              return false;
           }
           else if(!email.test(regex2))
            {
                alert("Email field must contain @gmail.com");
               return false;
            }
            else if(password!=reppass)
            {
                alert("Passwords are not equal");
               return false;
            }
           else{
               return true;
           }
        }
     </script>
   </head>
   <body>
      <div class="HeaderDiv">
         <header>
            <table class = "header">
               <tr>
                  <td><img class="Ibra" src="Resources/Images/5.png" alt="Ibra's Logo"></td>
                  <td>
                     <nav class="head">
                        <li><a href="index.php">INICIO</a></li>
                        <li><a class="current" href="AboutUs.php">SOBRE NOSOTROS</a></li>
                        <li><a href="Menu.php">MENU</a></li>
                        <li><a href="http://djj3612.uta.cloud/Jaime_ciudad/Blog.html/">BLOG</a></li>
                        <li><a href="Contact.php">CONTACTO</a></li>
                        <li><a href="javascript:void(0);" onclick="document.getElementById('id01').style.display='block'">REGISTRO</a></li>
                        <li><a href="javascript:void(0);" onclick="document.getElementById('id02').style.display='block'">INICIAR SESSION</a></li>
                     </nav>
                  </td>
               </tr>
            </table>
         </header>
         <div class="TopTriangle">
         </div>
		 <p class="top">
         <?php
                // Connect
                $servername = "localhost";
                $username = "djj3612_admin";
                $password = "webdata1234";
                $database = "djj3612_ibras";

                $conn = new mysqli($servername, $username, $password, $database);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT title FROM sobre";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    $row = $result->fetch_assoc();
                    $title = $row['title'];
                    echo $title;
                }
                $conn->close();
            ?>
         </p>
         <h2>
         <?php
                // Connect
                $servername = "localhost";
                $username = "djj3612_admin";
                $password = "webdata1234";
                $database = "djj3612_ibras";

                $conn = new mysqli($servername, $username, $password, $database);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT subtitle FROM sobre";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    $row = $result->fetch_assoc();
                    $subtitle = $row['subtitle'];
                    echo $subtitle;
                }
                $conn->close();
            ?>
         </h2>
         <div class="BottomTriangle">
         </div>
         <div class="Menu">
            <br/><br/>
            <div class="tab">
               <table class="MostSold">
                  <tr>
                     <td class="MostSold">
                        <img class="Burgers" src="Resources/Images/hamburguesa1.jpg" alt="Burger#1">
                     </td>
                     <td class="MostSold">
                        <img class="Burgers" src="Resources/Images/hamburguesa2.jpg" alt="Burger#2">
                     </td>
                  </tr>
               </table>
               <br/>
               <h2 class="MostSold">Somos Ibra</h2>
               <table class="MostSold1">
                  <tr>
                     <td class="MostSold">
                        <br/>
                        <table class="MostSold">
                           <tr>
                              <td class="MostSold" colspan="2">
                                 <h5>
                                 <?php
                                    // Connect
                                    $servername = "localhost";
                                    $username = "djj3612_admin";
                                    $password = "webdata1234";
                                    $database = "djj3612_ibras";

                                    $conn = new mysqli($servername, $username, $password, $database);

                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    $sql = "SELECT who1 FROM sobre";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0)
                                    {
                                        $row = $result->fetch_assoc();
                                        $who1 = $row['who1'];
                                        echo $who1;
                                    }
                                    $conn->close();
                                ?>
                                 </h5>
                              </td>
                           </tr>
                           <tr>
                              <td class="MostSold">
                                 <h5>
                                 <?php
                                    // Connect
                                    $servername = "localhost";
                                    $username = "djj3612_admin";
                                    $password = "webdata1234";
                                    $database = "djj3612_ibras";

                                    $conn = new mysqli($servername, $username, $password, $database);

                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    $sql = "SELECT who2 FROM sobre";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0)
                                    {
                                        $row = $result->fetch_assoc();
                                        $who2 = $row['who2'];
                                        echo $who2;
                                    }
                                    $conn->close();
                                ?>
                                 </h5>
                              </td>
                              <td class="MostSold">
                                 <h5>
                                 <?php
                                    // Connect
                                    $servername = "localhost";
                                    $username = "djj3612_admin";
                                    $password = "webdata1234";
                                    $database = "djj3612_ibras";

                                    $conn = new mysqli($servername, $username, $password, $database);

                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    $sql = "SELECT who3 FROM sobre";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0)
                                    {
                                        $row = $result->fetch_assoc();
                                        $who3 = $row['who3'];
                                        echo $who3;
                                    }
                                    $conn->close();
                                ?>
                                 </h5>
                              </td>
                           </tr>
                        </table>
                     </td>
                  </tr>
               </table>
               <table class="menubutton">
                  <tr>
                     <td><a href="Menu.html" class="menu_button_lowerest">VER MENÚ HOY</a></td>
                     <td><a href="Menu.html" class="menu_button_lowerest_green">PEDIR AHORA</a></td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
      <div class="Footer">
         <div class="TopTriangle2"></div>
         <table class="Footer">
            <img class="TinyBurger" src="Resources/Images/Burguer.png" alt="Tiny Burger">
            <h2 class="MostSold">Lo que dicen los clientes</h2>
            <tr>
               <td class="MostSold" width="33%">
                  <h5>
                  <?php
                    // Connect
                    $servername = "localhost";
                    $username = "djj3612_admin";
                    $password = "webdata1234";
                    $database = "djj3612_ibras";

                    $conn = new mysqli($servername, $username, $password, $database);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT client1 FROM sobre";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0)
                    {
                        $row = $result->fetch_assoc();
                        $client1 = $row['client1'];
                        echo nl2br($client1);
                    }
                    $conn->close();
                ?>
                 </h5>
               </td>
               <td class="MostSold" width="33%">
                  <h5>
                  <?php
                    // Connect
                    $servername = "localhost";
                    $username = "djj3612_admin";
                    $password = "webdata1234";
                    $database = "djj3612_ibras";

                    $conn = new mysqli($servername, $username, $password, $database);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT client2 FROM sobre";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0)
                    {
                        $row = $result->fetch_assoc();
                        $client2 = $row['client2'];
                        echo nl2br($client2);
                    }
                    $conn->close();
                ?>
                  </h5>
               </td>
               <td class="MostSold" width="33%">
                  <h5>
                  <?php
                    // Connect
                    $servername = "localhost";
                    $username = "djj3612_admin";
                    $password = "webdata1234";
                    $database = "djj3612_ibras";

                    $conn = new mysqli($servername, $username, $password, $database);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT client3 FROM sobre";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0)
                    {
                        $row = $result->fetch_assoc();
                        $client3 = $row['client3'];
                        echo nl2br($client3);
                    }
                    $conn->close();
                ?>
                  </h5>
               </td>
            </tr>
         </table>
      </div>
</body>
</html>