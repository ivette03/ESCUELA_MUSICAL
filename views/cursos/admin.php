
<main>
    <?php
      if($resultado){
        $mensaje=mostrarNotificacion(intval($resultado));
        if($mensaje){?>
            <p class="bg-cyan-600 p-2 text-white text-center font-bold"><?php echo $mensaje ?></p>
        <?php }
      }
    ?>
    
    <h2 class="text-center m-5 text-cyan-600 font-bold text-2xl">Cursos</h2>
    <div class="flex justify-center align-center">
    <a class="bg-cyan-600 rounded-sm p-2 text-white m-5" href="/cursos/crear">Nuevo curso</a>
    </div>
<div class="relative overflow-x-auto sm:rounded-lg md:px-28">
    <table class="w-full text-sm text-justify rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr class="bg-cyan-600">
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Descripción
                </th>
                <th scope="col" class="px-6 py-3">
                    Hola Inicio
                </th>
                <th scope="col" class="px-6 py-3">
                    Hola fin
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
                <?php echo $curso->nombre; ?>
                </td>
                <td class="px-2 py-2 bg-gray-50 dark:bg-gray-800">
                <?php echo $curso->descripcion; ?>
                </td>
                <td class="px-2 py-2">
                <?php echo $curso->hora_inicio; ?>
                </td>
                <td class="px-2 py-2">
                <?php echo $curso->hora_fin; ?>
                </td>
                <td class="px-2 py-2">
                <input value="Elimnar" class="bg-red-600 rounded-sm text-white text-center p-2">
                <input value="Actualizar" class="bg-cyan-600 rounded-sm text-white text-center p-2">
                </td>
            </tr>  
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


</main>