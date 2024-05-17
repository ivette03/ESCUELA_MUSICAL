<main>
  <!-- Curso 1 -->
  <h2 class="text-4xl font-semibold text-center m-5 text-cyan-500">Nuestros expertos</h2>
  <div class="xl:grid xl:grid-cols-3 xl:gap-8 p-8 flex flex-col justify-center align-center items-center">
    <?php foreach($profesores as $profesor){?>
      <div class="max-w-xs">
      <h2 class="text-center text-3xl font-semibold"><?php echo $profesor->nombre . " " . $profesor->apellido; ?></h2>
      <img src="../../imagenes/<?php echo $profesor->imagen;?>" width="300px" class="mx-auto" loading="lazy">
      <div class="bg-gray-200 p-8">
        <p class="text-center"><?php echo $profesor->descripcion; ?></p>
        
      </div>
    </div>
    <?php }?>


  </div>
</main>