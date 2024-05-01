<form class="max-w-md w-full mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data">
   <h2 class="text-cyan-600 text-center text-4xl">Crear curso</h2>
   <?php foreach($errores as $error):?>
      <div class="bg-red-600 text-white font-medium m-3 text-center p-2">
         <?php echo $error;?>
      </div>

   <?php endforeach;?>
   
   <?php
   include 'formulario_curso.php';
   ?>
</form>
