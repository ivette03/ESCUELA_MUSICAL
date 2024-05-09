<main>
    <?php
    if ($resultado) {
        $mensaje = mostrarNotificacion(intval($resultado));
        if ($mensaje) { ?>
            <p class="bg-cyan-600 p-2 text-white text-center font-bold"><?php echo $mensaje ?></p>
    <?php }
    }
    ?>

    <h2 class="text-center m-5 text-cyan-600 font-bold text-2xl">Cursos</h2>
    <div class="flex justify-center align-center mb-5">
        <a class="bg-cyan-600 rounded-sm p-2 text-white m-5" href="/cursos/crear">Nuevo curso</a>
        <a class="bg-cyan-600 rounded-sm p-2 text-white m-5" href="/profesor/crear">Nuevo profesor</a>
    </div>
    <div class="relative overflow-x-auto sm:rounded-lg md:px-28">
        <table class="w-full text-sm text-justify rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr class="bg-cyan-600">
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        imagen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Descripción
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hora Inicio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hora fin
                    </th>
                    
                    <th scope="col" class="px-6 py-3">
                        Opciones
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cursos as $curso) : ?>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            <?php echo $curso->id; ?>
                        </th>
                        <td class="px-2 py-2">
                            <img src="../../imagenes/<?php echo $curso->imagen; ?>" width="100px" height="auto"  loading="lazy">
                        </td>
                        <td class="px-2 py-2">
                            <?php echo $curso->nombre; ?>
                        </td>
                        <td class="px-2 py-2">
                            <?php echo $curso->descripcion; ?>
                        </td>
                        <td class="px-2 py-2">
                            <?php echo $curso->hora_inicio; ?>
                        </td>
                        <td class="px-2 py-2">
                            <?php echo $curso->hora_fin; ?>
                        </td>

                        
                        
                        <td class="px-2 py-2 flex">
                            <div class="space-y-2">
                                <form action="/cursos/eliminar" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $curso->id; ?>">
                                    <input type="hidden" name="tipo" value="curso">
                                    <input type="submit" class="bg-red-600 rounded-sm text-white text-center p-2 cursor-pointer w-full" value="Eliminar">
                                </form>
                               <a href="/cursos/actualizar?id=<?php echo $curso->id;?>" class="bg-cyan-600 text-white p-2">Actualizar</a>
                            </div>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


  <!--tabla profesores-->
  <h2 class="text-center m-5 text-cyan-600 font-bold text-2xl">Profesores</h2>
    <div class="relative overflow-x-auto sm:rounded-lg md:px-28">
        <table class="w-full text-sm text-justify rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr class="bg-cyan-600">
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        imagen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    
                    <th scope="col" class="px-6 py-3">
                        Descripcion
                    </th>
                    
                    <th scope="col" class="px-6 py-3">
                        Opciones
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profesores as $profesor) : ?>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            <?php echo $profesor->id; ?>
                        </th>
                        <td class="px-2 py-2">
                            <img src="../../imagenes/<?php echo $profesor->imagen; ?>" width="100px" height="auto"  loading="lazy">
                        </td>
                        <td class="px-2 py-2">
                            <?php echo $profesor->nombre . " " . $profesor->apellido; ?>

                        </td>
                       
                        <td class="px-2 py-2">
                            <?php echo $profesor->descripcion; ?>
                        </td>
                        
                        
                        <td class="px-2 py-2 flex">
                            <div class="space-y-2">
                                <form action="/profesor/eliminar" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $profesor->id; ?>">
                                    <input type="hidden" name="tipo" value="profesor">
                                    <input type="submit" class="bg-red-600 rounded-sm text-white text-center p-2 cursor-pointer w-full" value="Eliminar">
                                </form>
                               <a href="/profesores/actualizar?id=<?php echo $profesor->id;?>" class="bg-cyan-600 text-white p-2">Actualizar</a>
                            </div>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</main>