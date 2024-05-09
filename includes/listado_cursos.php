
<main>
  <!-- Curso 1 -->
  <h2 class="text-4xl font-semibold text-center m-5 text-cyan-500">Nuestros cursos</h2>
  <div class="xl:grid xl:grid-cols-3 xl:gap-8 p-8 flex flex-col justify-center align-center items-center">
    <?php foreach($cursos as $curso){?>
      <div class="max-w-xs">
      <h2 class="text-center text-3xl font-semibold"><?php echo $curso->nombre; ?></h2>
      <img src="../../imagenes/<?php echo $curso->imagen;?>" width="300px" class="mx-auto" loading="lazy">
      <div class="bg-gray-200 p-8">
        <p class="text-center"><?php echo $curso->descripcion; ?></p>
        <div class="flex justify-center m-5">
          <button class="p-5 text-cyan-600 font-semibold rounded-xl border-4 border-cyan-500 hover:bg-cyan-500 hover:text-white text-xl">Tomar curso</button>
        </div>
      </div>
    </div>
    <?php }?>


  </div>
</main>
