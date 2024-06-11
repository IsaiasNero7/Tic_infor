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
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/carrossel.css">
  <link rel="stylesheet" href="css/tabela.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="responsividade.css">
  <link rel="stylesheet" href="css/rodape.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  
  

  <!--CARROSSEL-->
    <section class="slider">
  
      <div class="slider-conteiner">
  
        <input type="radio" name="btn-radio" id="radio1">
        <input type="radio" name="btn-radio" id="radio2">
        <input type="radio" name="btn-radio" id="radio3">
  
  
  
        <div class="slide-box primeiro">
          <img class="img-desktop" src="carrossel/img.jpg">
        </div>
  
        <div class="slide-box">
          <img class="img-desktop" src="carrossel/img2.jpg">
        </div>
  
        <div class="slide-box">
          <img class="img-desktop" src="carrossel/img3.jpg">
        </div>
  
        <div class="nav-auto">
  
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
  
        </div>
  
        <div class="nav-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
  
  
      </div>
    </section>
<!--CARROSSEL--> 
    
  
<!--HORARIO E VALORES-->
<div class="horario_valores">
  
  <div class="tabela">
    <img src="tabela/img.jpg">
  </div>
  
  <div class="tabela">
    <img src="tabela/img2.jpg">
  </div>
  </div>
</div> 
<!--HORARIO E VALORES-->  
<div class="txt">
  <h1 class="experiencia">Experiência <h1 class="forca">Força Natural</h1> 
</h1>
</div>
<!--IMAGENS DA ACADEMIA-->
<div class="tabela2">

 

  <div class="imgs">
  
  <div class="img_tabela">
    <img src="academia/img1.jpg">
  </div>
  
  <div class="img_tabela">
    <img src="academia/img2.jpg">
  </div>

  <div class="img_tabela">
    <img src="academia/img3.jpg">
  </div>

</div> 
</div>
<!--IMAGENS DA ACADEMIA-->

<div class="footer-conteiner">
  
  <div class="linha"></div>
  <h1>Siga a Força Natural</h1>
  <div class="footer-socias">
    <br>
    <a class="social" id="instagram" href="#"> 
    <i class="bi bi-instagram"></i>
    </a>
   
    <a class="social" id="facebook" href="https://m.facebook.com/people/For%C3%A7a-Natural-Trainer/100054513636941/?locale=sw_KE">
      <i class="bi bi-facebook"></i>
    </a>
    
    <a class="social" id="whatsapp" href="#"><i class="bi bi-whatsapp"></i></a>
  </div>
  
  <div class="linha2"></div>

  <div class="fim">
    <div class="contato">
      <P>Trabalhamos com pessoas que buscam não só a estética, mas saúde e qualidade de vida. </P>
    </div>


    <div class="contato">
      <P>(88)996013739</P>
      <p>academia-forcanatural@hotmail.com</p>
    </div>

    <div class="informacoes">
      <P>Rodovia Padre Cicero< N° 286 - ANDAR 1-PARAÍSO-CARIRIAÇU-CE</P>
    </div>
    

    <div class="logo">
      <img src="logo.png" alt="">
    </div>
</div>

</div>


<!--MENU-->
 
<!--MENU-->


<!--BORDA-->
<div class="borda">
  <nav class="navbar">
    <ul>
      
      <li class="nav-itens-home">
        <a class="forca" href="admin.html">Força natural</a>
      </li>
        

      <li class="nav-itens">
        <button onclick="animar()">
          Treinos
        </button>
        
        <ul class="dropdawn" id="dropdown">
        
            <li>
               <a href="teino_semanal.html">Semanal</a>
            </li>
        
            <li>
               <a href="treino_4dias.html">4 Dias</a>
            </li>
        
            <li>
               <a href="treino_3dias.html">3 Dias</a>
            </li>
        
         </ul>
      </li>
      

      
      <li class="nav-itens">
        <a class="nav-lin" href="quem_somos.html">Quem somos?</a>
      </li>

      <li class="nav-itens">
        <a class="nav-lin" href="formulario.html">Feedback</a>
      </li>
      
      <button class="loginn"> <a href="cad.html">Matricula</a></button>
      <button class="sair"> <a href="logout.php">Sair</a></button>
      
    </ul>
  </nav>

      
    
  </div>
 
 
  
    <button onclick="anima()" id="btn-menu">
    
              <span class="linhaa"></span>
              <span class="linhaa"></span>
              <span class="linhaa"></span>
    
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
        
              
              <button class="login_mobile"> <a class="nav-link-mobil"href="logout.php">Sair</a></button>
      </ul>
      
    </nav>
    
  </div>


<!--BORDA

  <button onclick="animar()" id="btn-menu">
  
            <span class="linha"></span>
            <span class="linha"></span>
            <span class="linha"></span>
  
  </button>
-->
  <script src="Menu.js"></script>
  <script src="js/carrossel.js"></script>
</body>
</html>