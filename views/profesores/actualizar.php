<div class="flex justify-center m-5 flex-row-reverse">
<h2 class="text-cyan-600 text-center text-4xl">Actualizar Profesor</h2>
<a href="/admin" class="bg-cyan-600 text-white p-2 w-20 rounded-md">Volver</a>
</div>
<form class="max-w-md w-full mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data">
   <?php foreach($errores as $error):?>
      <div class="bg-red-600 text-white font-medium m-3 text-center p-2">
         <?php echo $error;?>
      </div>
   <?php endforeach;?>
   <?php
   include 'formulario_profesores.php';
   ?>
</form>
