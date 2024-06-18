<?php
$servidor = "127.0.0.1";
$usuario= "root";
$clave = "";
$baseDeDatos = "basep";


$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);


if (!$enlace) {
    die("Conexión fallida: " . mysqli_connect_error());
}


if (isset($_POST['registro'])) { 
  $nombre= $_POST['Nombre'];
  $adquirir= $_POST['Adquirir'];
  $detalles = $_POST['Detalles']; 
  $direccion = $_POST['Direccion'];
  $numero = $_POST['Numero'];



  $insertarDatos = "INSERT INTO datos (Nombre, Adquirir, Detalles, Direccion, Numero) VALUES ('$nombre', '$adquirir' , '$detalles', '$direccion', '$numero')";
  $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Busher Cocdril’s</title>
    <meta name="keyboards" content="hamburguesa,hamburguesas,comida,comida_rapida,comida_rica,restaurante,buenos_aires,">
    <meta name="description" content="Pagina de hamburguesa">
    <meta name="author" content="Efrain wilches">
    <meta name="copyright" content="efrathecode">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="https://images.vexels.com/media/users/3/136309/isolated/preview/c6539229ad5c57c313d95711a1e676db-logo-hamburguesa-comida-rapida.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
  <header>
<section class="header">

  <a href="#"
  class="logo"><i class="fa-solid fa-burger"></i>Busher Cocdril’s</a>
   

  <nav class="navbar">
    <a href="#home">inicio</a>
    <a href="#comida">comida</a>
    <a href="#menu">menu</a>
    <a href="#pedidos">Pedidos</a>
    <a href="#nosotros">Nosotros</a>
   
    
   
    
  </nav>

<div id="menu-btn" class="fas fa-bars"></div>
</section>
<!--Empieza seccion home-->


<section class="home" id="home">
  
 <div class="swiper home-slider">

  <div class="swiper-wrapper">
    
    <div class="swiper-slide slide" style="background: url(slide2.jpg) no-repeat;">
      
      <div class="content1">
         <span>¿algo para comer?</span>
         <h3>Hamburguesas Busher Cocdril’s</h3>
         <a href="#menu" class="btn">VER MENU</a>
      </div>
    
    </div>

    <div class="swiper-slide slide" style="background: url(a.jpg) no-repeat;">
      
      <div class="content1">
         <span>¿algo para tomar?</span>
         <h3>Bebidas Busher Cocdril’s</h3>
         <a href="#menu" class="btn">VER MENU</a>
      </div>
    
    </div>

    <div class="swiper-slide slide" style="background: url(slider3.jpg) no-repeat;">
      
      <div class="content1">
         <span>¿algo para amar?</span>
         <h3>Postres Busher Cocdril’s</h3>
         <a href="#menu" class="btn">VER MENU</a>
      </div>
    
    </div>
 
    </div>
 
       <div class="swiper-button-next"></div>
       <div class="swiper-button-prev"></div>

   </div>

</section>
<!--Termina seccion home-->


<!--Empieza seccion nosotros-->
<section class="nosotros" id="nosotros">

  <div class="image">
     <img src="c.jpg" alt="">
  </div>

  <div class="content">
      <h3 class="titulo">Busher Cocdril’s</h3>
      <p>Busher COCDRIL’S® abre sus puertas en el año 2015, gracias al interés y confianza de nuestros clientes, la Marca se da la gran oportunidad de abrir sus puertas al modelo de negocio de franquicia en año 2018, todo lo anterior con el fin y propósito de compartir su experiencia y conocimientos con otros inversionistas del sector alimenticio, así como también de ampliar el alcance de más personas sus inigualables platillos.
      </p>
         <a href="#"class="btn">Mas info</a>
         <div class="icons-container">
          
          <div class="icons">
            <img src="ham2.png" alt="">
            <h3> Hamburguesas para gozar</h3>
          </div> 
          
          <div class="icons">
            <img src="mal.webp" alt="">
            <h3>Bebidas para disfrutar</h3>
          </div>
         
          <div class="icons">
            <img src="ali2.webp" alt="">
            <h3> Snacks</h3>
          </div>
        
        </div>
  </div>

</section>
<!--Termina seccion nosotros-->


<!--Empieza seccion Comida-->
<section class="comida"  id="comida" >

<div class="heading">
  <span>Platos populares</span>
    <h3>Nuestras delicias</h3>
</div>

<div class="swiper comida-slider">

  <div class="swiper-wrapper">

    <div class="swiper-slide slide" data-name="comida-1">
     <img src="f1.jpg" alt="">
     <h3>La Champi</h3>
     <div class="price">$950</div>  
  </div>

  <div class="swiper-slide slide" data-name="comida-2">
    <img src="f2.jpg" alt="">
    <h3>Pollo Tluda</h3>
    <div class="price">$1020</div>  
 </div>

  <div class="swiper-slide slide" data-name="comida-3">
    <img src="f3.jpg" alt="">
    <h3>Chicken Cruji Burger</h3>
    <div class="price">$1200</div>  
 </div>

 <div class="swiper-slide slide" data-name="comida-4">
  <img src="f4.jpg" alt="">
  <h3>Pomo Doro</h3>
  <div class="price">$820</div>  
</div>

<div class="swiper-slide slide" data-name="comida-5">
  <img src="f5.jpg" alt="">
  <h3>Buffalo Hot Burger</h3>
  <div class="price">$1100</div>  
</div>

<div class="swiper-slide slide" data-name="comida-6">
  <img src="f6.jpg" alt="">
  <h3>Red Spicy</h3>
  <div class="price">$750</div>  
</div>

<div class="swiper-slide slide" data-name="comida-8">
  <img src="f7.jpg" alt="">
  <h3>Waca Boneles</h3>
  <div class="price">$1080</div>  
</div>


  <div class="swiper-slide slide" data-name="comida-10">
    <img src="f8.jpg" alt="">
    <h3>Sweet Mango Habanero</h3>
    <div class="price">$910</div>  
  </div>

</div>
  
<div class="swiper-pagination"></div>

</div>

</section>
<!--Termina seccion Comida-->




<!--seccion menu empieza-->
<section class="menu" id="menu">
<div class="heading">
  
<h3> Nuestro menu </h3>
</div>

<div class="menu-slider">

    <div class="w">

    <div class="slide">
      <h3 class="titulo">Hamburguesas</h3>
             <div class="box-container">

              <div class="box">
                <div class="info">
                  <h3>Happy Bun </h3>
                  <p> Nuestra clasica y rica cajita feliz</p>
                  </div>
                   <div class="price">$49.99</div>
            </div>

            <div class="box">
              <div class="info">
                <h3> Santo Pecado</h3>
                <p>"Dios perdona nuestros antojos y no nos hagas caer en la obesidad".<br>
                  (Triple Hamburguesa de carne con doble chedar,cebolla crispy,bacon y nuestra salsa especial.)
                </p>
                </div>
                 <div class="price">$49.99</div>
          </div>

          <div class="box">
            <div class="info">
              <h3>Las Rascacielos </h3>
              <p> Para los verdaderos amantes de las alturas.<br>
                (5 carnes de 120 gramos con queso Dambo)</p>
              </div>
               <div class="price">$49.99</div>
        </div>

        <div class="box">
          <div class="info">
            <h3>Don K </h3>
            <p>(1 carne de 200 gramos,lechuga,tomate,bacon y queso derretido) </p>
            </div>
             <div class="price">$49.99</div>
      </div>

      <div class="box">
        <div class="info">
          <h3> La Good Burger</h3>
          <p>(Doble carne de 200 gramos con lechuga, tomates cherrys y queso dambo) </p>
          </div>
           <div class="price">$49.99</div>
    </div>

    <div class="box">
      <div class="info">
        <h3>Súper-Burgers </h3>
        <p>(Doble carne de 100 gramos con lechuga,tomate,cebolla,pepino y queso chedar)</p>
        </div>
         <div class="price">$49.99</div>
  </div>

  <div class="box">
    <div class="info">
      <h3>La Cueva </h3>
      <p>(Hamburguesa de choriso con chedar,tomate,cebolla,pepino y lechuga) </p>
      </div>
       <div class="price">$49.99</div>
</div>



<div class="slide">
  <h3 class="titulo">Bebidas</h3>
    <div class="box-container">
       
          <div class="box">
              <div class="info">
                <h3>Chocolate</h3>
                <p>Una clásica y sabrosa malteada de chocolate. </p>
                </div>
                 <div class="price">$49.99</div>
          </div>

          <div class="box">
            <div class="info">
              <h3>Vialactea</h3>
              <p>Si la Vía Láctea fuese una bebida, probablemente luciría así.
                Riquisima malteada de vainilla traida del Espacio.</p>
              </div>
               <div class="price">$49.99</div>
        </div>

        <div class="box">
          <div class="info">
            <h3> Merengada de brownie y Baileys</h3>
            <p>Chocolate deLuxe, un pedacito de cielo en tu paladar.</p>
            </div>
             <div class="price">$49.99</div>
      </div>

      <div class="box">
        <div class="info">
          <h3>La Bicolor</h3>
          <p> helado de fresa, helado de vainilla y leche</p>
          </div>
           <div class="price">$49.99</div>
    </div>

    <div class="box">
      <div class="info">
        <h3> Frappé de coco</h3>
        <p>Ten tu dosis de cafeína de una forma diferente, y mucho más divertida, con esta bebida hecha a base de helado de café y coco.</p>
        </div>
         <div class="price">$49.99</div>
  </div>

  <div class="box">
    <div class="info">
      <h3>Malteada de fresa.</h3>
      <p> Una exquisita y clasica malteada de Fresa.</p>
      </div>
       <div class="price">$49.99</div>
</div>

<div class="box">
  <div class="info">
    <h3> La Frapu</h3>
    <p> Alegra tus tardes con este batido de vainilla y cappuccino</p>
    </div>
     <div class="price">$49.99</div>
</div>

<div class="box">
<div class="info">
  <h3>La Tropical</h3>
  <p>Una milkshake tropi-caliente con zumo de piña con helado de coco. </p>
  </div>
   <div class="price">$49.99</div>
</div>



<div class="slide">
  <h3 class="titulo">Postres</h3>
    <div class="box-container">
       
          <div class="box">
              <div class="info">
                <h3>Pasteís de Belém</h3>
                <p>(texto de ejemplo) </p>
                </div>
                 <div class="price">$49.99</div>
          </div>

          <div class="box">
            <div class="info">
              <h3>Pávlola</h3>
              <p>(texto de ejemplo) </p></h3>
            </div>
             <div class="price">$49.99</div>
      </div>

      <div class="box">
        <div class="info">
          <h3> Helados, sorbetes y polos</h3>
          <p>(texto de ejemplo) </p>
          </div>
           <div class="price">$49.99</div>
    </div>

    <div class="box">
      <div class="info">
        <h3>Tarta de chocolate</h3>
        <p> (texto de ejemplo) </p>
        </div>
         <div class="price">$49.99</div>
  </div>

  <div class="box">
    <div class="info">
      <h3> Gelato</h3>
      <p>(texto de ejemplo) </p>
      </div>
       <div class="price">$49.99</div>
</div>

<div class="box">
  <div class="info">
    <h3>Tiramisú</h3>
    <p>(texto de ejemplo) </p>
    </div>
     <div class="price">$49.99</div>
</div>

<div class="box">
<div class="info">
  <h3> Panna Cotta</h3>
  <p>(texto de ejemplo) </p>
  </div>
   <div class="price">$49.99</div>
</div>

              
       
            </div>

    </div>
    
    </div>

</div>

</section>
<!--seccion menu termina-->


<!--Empieza pedidos-->
<section class="pedidos" id="pedidos">
<div class="heading">

    <span>¡¡ Ordena Ya !!</span>
    <h3>Rapido envio a domicilio </h3>

</div>
<form action="#" name="registro" method="post">
<div class="container">
<form action="">
  <div class="box-container">
      <div class="box">

        <div class="inputBox">
          <span>Nombre completo</span>
          <input type="text" name="Nombre" placeholder="Coloca tu nombre">

        </div>

        <div class="inputBox">
          <span>¿Que deseas adquirir?</span>
          <input type="text" name="Adquirir" placeholder="nombra lo que deseas comprar">

        </div>

        <div class="inputBox">
          <span>Detalles de la orden</span>
          <input type="text" name="Detalles" placeholder="Algo para detallar a nuestros Chefs?">

        </div>

        <div class="inputBox">
          <span>Tu direccion</span>
         <textarea name="Direccion" placeholder="Escribe tu direccion" id="" cols="30" rows="10"></textarea>

        </div>

        <div class="inputBox">
          <span>Numero</span>
          <input type="text" name="Numero" placeholder="Escribe tu Numero telefonico">

        </div>

        <div class="inputBox">
          <span>Nuestra direccion</span>
      <iframe class="map" src="https://www.google.com/maps/embed?pb=" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        </div>

      </div>

  </div>
<input type="submit" name="registro" value="ordena ahora" class="btn">
</div>
</form>




</section>
<!--Termina pedidos-->


<!--Footer Empieza-->
<section class="footer">

  <div class="icons-container">

        <div class="icons">
          <i class="fas fa-clock"></i>
          <h3>Horarios de apertura</h3>
          <p>3:00pm  a  11:00pm</p>
        </div>

        <div class="icons">
          <i class="fas fa-phone"></i>
          <h3>Telefono</h3>
          <p>+52 235-111-7018</p>
        </div>

        <div class="icons">
          <i class="fas fa-envelope"></i>
          <h3>Email</h3>
          <p>franquicias@bushercocdrils.com</p>
        </div>

        <div class="icons">
          <i class="fas fa-map"></i>
          <h3>Direccion</h3>
          <p>Sebastián Lerdo de Tejeda</p>
        </div>  

      </div>

        <div class="share">
          <a href="https://www.facebook.com/bushercocdrilsmisantla?locale=es_LA" target="_blank" class="fab fa-facebook-f"></a>
          <a href="#" target="_blank" class="fab fa-twitter"></a>
          <a href="https://www.instagram.com/bushercocdrilsmisantla?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="fab fa-instagram" target="_blank"></a>
          <a href="#" target="_blank" class="fab fa-linkedin"></a>
        </div>




</section>


<!--Footer Termina-->



</header>
  <!-- Swiper -->
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <!--java reel-->
  <script src="js/script.js"></script>
</body>  