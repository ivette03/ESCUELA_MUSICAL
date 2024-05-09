<?php $inicio = isset($inicio) ? $inicio : false;?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--css-->
  <link href="../dist/output.css" rel="stylesheet">

  <!--iconos-->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!--swiper css-->
  <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">

</head>

<body>
  <header class="bg-gradient-to-r from-cyan-700 to-blue-500  text-white ">
    <!-- Menú de navegación -->
    <div class="flex items-center lg:hidden">
      <ion-icon id="menu-button" name="menu-outline" class="text-3xl cursor-pointer m-2 text-white"></ion-icon>
    </div>
    <div class="container mx-auto lg:flex flex-col gap-y-4 lg:flex-row lg:justify-between items-center">
      <!--imagen logo-->
      <div class="lg:flex lg:justify-center lg:items-center' ">
        <div class="flex justify-center items-center ">
          <a>
            <img src="../assets/img/logo escuela.png" class=" w-[10rem] lg:w-[10rem]" loading="lazy">
          </a>
        </div>
      </div>
      <!--nav BAR -->
      <nav class=" hidden nav-links flex  lg:flex justify-center items-center flex-col lg:justify-between lg:flex-row gap-x-10 p-5">
        <a class="pb-2 hover:text-gray-800 cursor-pointer " href="/">Inicio</a>
        <a class="pb-2 hover:text-gray-800 cursor-pointer">Blog</a>
        <a class="pb-2 hover:text-gray-800 cursor-pointer" href="/cursos">Cursos</a>
        <a class="pb-2 hover:text-gray-800 cursor-pointer">Contactanos</a>
        
        <a class="pb-2 hover:text-gray-800 cursor-pointer">Cerrar Sesión</a>
      </nav>
    </div>
    <!--Slogan-->
    <?php if($inicio):?>
      <div class="flex justify-center items-center py-[30px] align-center">
      <h1 id="slogan" class="xl:text-4xl p-5 text-gray-100 font-semibold text-center" style="font-family:Roboto Condensed, sans-serif; font-size:3rem;">¡Descubre tu pasión por la música con nuestra
        academia!</h1>
    </div>
    <?php endif;?>
    <!--imagen-->
    <?php if ($inicio): ?>
    <div class="flex items-center justify-center lg:max-w-full h-auto">
      <img src="../assets/img/header.jpg" style="max-width: 40rem; height: auto;" loading="lazy">
    </div>
   <?php endif; ?>
  </header>

  <!--variable $contenido-->
  <?php echo $contenido;?>
  
  <footer class="bg-gradient-to-r from-cyan-700 to-blue-500  text-white  w-full">
    <nav class="nav-links flex lg:flex justify-center items-center flex-col lg:flex-row gap-x-10 p-5">
        <a class="pb-2 hover:text-gray-700 cursor-pointer" href="/">Inicio</a>
        <a class="pb-2 hover:text-gray-800 cursor-pointer">Blog</a>
        <a class="pb-2 hover:text-gray-700 cursor-pointer"  href="/cursos">Cursos</a>
        <a class="pb-2 hover:text-gray-700 cursor-pointer">Contactanos</a>
    </nav>
</footer>

    <script src="../assets/js/swiper-bundle.min.js"></script>
    <!--scrollreveal-->
    <script src="../assets/js/scrollreveal.min.js"></script>
    <!--main-js-->
    <script src="../assets/js/main.js"></script>
</body>

</html>