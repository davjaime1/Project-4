<!doctype html>

<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>

    <link rel="stylesheet" type="text/css" href="../Resources/CSS/ciudad.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"  rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="../Blog.html/wp-content/themes/BlogTheme/style.css">

    <script>
        function openMenu(evt, foodName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(foodName).style.display = "block";
        evt.currentTarget.className += " active";
        }
    </script>
</head>
<body <?php body_class();?>>
    <div class="HeaderDiv">
        <header>
                <table class = "header">
                    <tr>
                        <td class="Nav"><img class="Ibra" src="../Resources/Images/5.png" alt="Ibra's Logo"></td>
                        <td class = "Nav">
                            <nav class="head">
                                <li><a href="../index.html">INICIO</a></li>
                                <li><a href="../AboutUs.html">SOBRE NOSOTROS</a></li>
                                <li><a href="../Menu.html">MENU</a></li>
                                <li><a class="current" href="http://djj3612.uta.cloud/Jaime_ciudad/Blog.html/">BLOG</a></li>
                                <li><a href="../Contact.html">CONTACTO</a></li>
                                <li><a href="javascript:void(0);"onclick="document.getElementById('id01').style.display='block'">REGISTRO</a></li>
                                <li><a href="javascript:void(0);" onclick="document.getElementById('id02').style.display='block'">INICIAR SESSION</a></li>
                            </nav>
                        </td>
                    </tr>
                </table>
        </header>
        <div class="TopTriangle">
        </div>  
        <p class="top">LAS MEJORES DE LA CIUDAD</p>
        
        <h1>Nuestro Blog</h1>
        <div class="BottomTriangle"></div>               
    </div>
    <div class ="Blog">
         
    </div>

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content modal">
          <div class="w3-container">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div class="imgcontainer">
                <img class="TinyBurger2" src="../Resources/Images/Burguer.png" alt="Tiny Burger" style="display: inline;">
                <h1 style="color:black;font-size: 30px; display: inline; ">Registro de Usuario</h1>
            </div>
            <form action="/RegisterPage" method="post">
                <div>
                    <label for="uname"><b>Nombre y apellido:</b></label><br>
                    <input type="text" name="uname" required><br>
              
                    <label for="psw"><b>Correo:</b></label><br>
                    <input type="password"  name="psw" required><br>

                    <label for="psw"><b>Contraseña:</b></label><br>
                    <input type="password" name="psw" required><br>

                    <label for="psw"><b>Repetir Contraseña:</b></label><br>
                    <input type="password" name="psw" required><br>

                    <label for="psw"><b>Direccion:</b></label><br>
                    <input type="password" name="psw" required><br>
                      
                    <button type="submit" style="background-color:red">Cargar</button>
                  </div>
              </form> 
          </div>
        </div>
      </div>
    </div>
    <div id="id02" class="w3-modal">
        <div class="w3-modal-content modal">
          <div class="w3-container">
            <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div class="imgcontainer">
                <img class="TinyBurger2" src="../Resources/Images/Burguer.png" alt="Tiny Burger" style="display: inline;">
                <h1 style="color:black;font-size: 30px; display: inline; ">Registro de Usuario</h1>
            </div>
            <form action="/RegisterPage" method="post">
                <div>
                    <label for="uname"><b>Usuario:</b></label><br>
                    <input type="text" name="uname" required><br>

                    <label for="psw"><b>Contraseña:</b></label><br>
                    <input type="password" name="psw" required><br>
                      
                    <button type="submit" style="background-color:red">Cargar</button>
                  </div>
              </form> 
          </div>
        </div>
      </div>
    </div>
