
<div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="curso[nombre]" type="text" placeholder="Ingrese nombre" value="<?php echo s($curso->nombre); ?>">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">Descripción:</label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" name="curso[descripcion]" placeholder="Ingrese descripción" ><?php echo s($curso->descripcion);?></textarea>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="hora_inicio">Hora inicio</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="hora_inicio" name="curso[hora_inicio]" type="time"  value="<?php echo s($curso->hora_inicio);?>">
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="hora_fin">Hora final</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="hora_fin" name="curso[hora_fin]" type="time"  value="<?php echo s($curso->hora_fin);?>">
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="imagen">imagen</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="imagen" name="curso[imagen]" type="file" accept="image/jpg, image/png">
        <?php if($curso->imagen){?>
            <img src="../../imagenes/<?php echo $curso->imagen;?>" width="100px" height="auto"  loading="lazy">
        <?php } ?>
      
    </div>

    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Crear Curso
        </button>
    </div>
    