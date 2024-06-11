<?php
session_start();

if(!isset($_SESSION['usuario_id'])){
header("location:index.php");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/quem_somos.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <div class="borda">
        <nav class="navbar">
          <ul>
            
            <li class="nav-itens-home">
              <a class="forca" href="index.php">Força natural</a>
            </li>
            
            <li class="nav-itens">
              <a class="nav-lin" href="quem-somos.php">Quem somos?</a>
            </li>
      
            <li class="nav-itens">
              <a class="nav-lin" href="formulario.html">Feedback</a>
            </li>
            
            <button class="loginn"> <a href="login.php">Login</a></button>
                 
            
          </ul>
        </nav>
      
            
          
        </div>
       
       
        
          <button onclick="anima()" id="btn-menu">
          
                    <span class="linha"></span>
                    <span class="linha"></span>
                    <span class="linha"></span>
          
          </button>
        
       
         <div class="menu" id="menu">
          
              
          <nav>
            
            <ul class="dropdown-menu">
              
            
              
              
              <li>
                 <a class="nav-link-mobile"href="#"> <i class="bi bi-chevron-compact-down"></i>Como surgiu?</a>
              </li>
              <li class="blog">
                 <a class="nav-link-mobile"href="#" id=""> <i class="bi bi-chevron-compact-down"></i>Feedback</a>
                 <div class="dropdown">
      
                 </div>
              
                    <button class="login_mobile"> <a class="nav-link-mobil"href="login.html">Login</a></button>
            </ul>
            
          </nav>
          
        </div>
    
    <img src="quem somos/1.png">
    <img src="quem somos/2.png">
    <script src="js/Menu.js"></script>
</body>
</html>