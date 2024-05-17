
<main class="container mx-auto px-4 py-8 m-5">
    <h1 class="text-center font-semibold text-cyan-500 text-4xl m-5"><?php echo $blog->titulo; ?></h1>
    <img src="../../imagenes/<?php echo $blog->imagen;?>" width="500px" class="mx-auto m-5" loading="lazy">
    <p class="text-justify"><?php  echo $blog->contenido;?></p>

</main>