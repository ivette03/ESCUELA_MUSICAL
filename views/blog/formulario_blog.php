
<div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">Titulo</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titulo" name="blog[titulo]" type="text" placeholder="Ingrese titulo" value="<?php echo s($blog->titulo); ?>">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="contenido">Contenido</label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contenido" name="blog[contenido]" placeholder="Ingrese contenido" ><?php echo s($blog->contenido); ?></textarea>
    </div>
 

    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="imagen">imagen</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="imagen" name="blog[imagen]" type="file" accept="image/jpg, image/png">
        <?php if($blog->imagen){?>
            <img src="../../imagenes/<?php echo $blog->imagen;?>" width="100px" height="auto"  loading="lazy">
        <?php } ?>
      
    </div>

    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Guardar
        </button>
    </div>
    