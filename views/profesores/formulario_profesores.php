
<div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nombres">Nombres:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="profesor[nombre]" type="text" placeholder="Ingrese nombres" value="">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="apellidos">Apellidos:</label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="apellido" name="profesor[apellido]" placeholder="Ingrese apellidos" ></textarea>
    </div>
 
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">Descripción:</label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" name="profesor[descripcion]" placeholder="Ingrese descripción" ></textarea>
    </div>

    


    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="imagen">imagen</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="imagen" name="profesor[imagen]" type="file" accept="image/jpg, image/png">
        <?php if($profesor->imagen){?>
            <img src="../../imagenes/<?php echo $curso->imagen;?>" width="100px" height="auto"  loading="lazy">
        <?php } ?>
      
    </div>

    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Guardar
        </button>
    </div>
    