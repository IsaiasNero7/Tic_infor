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
    <link rel="stylesheet" href="css/treinos.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Treino semanal</title>
</head>
<body style="background-color: black;">
    <img class="banner" src="treinos_img/banner.png" >
    <div class="tabelas_treino">
        <img src="treinos_img/1.png" alt="">
    </div>

    <div class="borda">
      <nav class="navbar">
        <ul>
          
          <li class="nav-itens-home">
            <a class="forca" href="">Força natural</a>
          </li>
            
    
          <li class="nav-itens">
            <button onclick="animar()">
              Treinos
            </button>
            
            <ul class="dropdawn" id="dropdown">
            
                <li>
                   <a href="teino_semanal.php">Semanal</a>
                </li>
            
                <li>
                   <a href="treino_4dias.php">4 Dias</a>
                </li>
            
                <li>
                   <a href="treino_3dias.php">3 Dias</a>
                </li>
            
             </ul>
          </li>
          
    
          
          <li class="nav-itens">
            <a class="nav-lin" href="quem_somos.php">Quem somos?</a>
          </li>
    
          <li class="nav-itens">
            <a class="nav-lin" href="formulario.html">Feedback</a>
          </li>
          
         
          <button class="sair"> <a href="logout.php">Sair</a></button>
               
          
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
            <button class="btn-treino" id="btn-treino"onclick="anim()">
              Treinos
            </button>
            
            <ul class="dropdawn-mobile" id="dropdown-m">
            
                <li>
                   <a href="semanal">Semanal</a>
                </li>
            
                <li>
                   <a href="semanal">4 Dias</a>
                </li>
            
                <li>
                   <a href="semanal">3 Dias</a>
                </li>
            
             </ul>
             
            </li>
            
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
      <script src="js/Menu.js"></script>
</body>
</html>