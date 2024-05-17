
<main>
  <!-- Curso 1 -->
  <h2 class="text-4xl font-semibold text-center m-5 text-cyan-500">Blog</h2>
  <div class="xl:grid xl:grid-cols-3 xl:gap-8 p-8 flex flex-col justify-center align-center items-center">
    <?php foreach($blogs as $blog){?>
      <div class="max-w-xs">
      <h2 class="text-center text-3xl font-semibold m-5"><?php echo $blog->titulo; ?></h2>
      <img src="../../imagenes/<?php echo $blog->imagen;?>" width="300px" class="mx-auto" loading="lazy">
      <div class="bg-gray-200 p-8">
        <div class="flex justify-center m-5">
        <a href="/blog/blog_completo?id=<?php echo $blog->id;?>" class="bg-cyan-600 text-white p-2">Leer mas</a>
        </div>
      </div>
    </div>
    <?php }?>


  </div>
</main>
