<main class="flex justify-center items-center flex-col space-y-4">

    <div class="m-5">
        <h2 class="text-2xl font-bold text-cyan-500">Formulario de contacto</h2>
    </div>
    <form class="max-w-md w-full" method="POST">
        <?php if ($mensaje) { ?>
            <p class="bg-cyan-500 text-white p-5 font-bold m-5 text-center"><?php echo $mensaje; ?></p>
        <?php } ?>

        <fieldset class="border border-gray-300 p-4 rounded-md">
            <legend class="text-lg font-bold text-cyan-500">Información Personal</legend>
            <label for="nombre" class="block mt-2">Nombre:</label>
            <input placeholder="Escriba su nombre" type="text" name="contacto[nombre]" id="nombre" class="w-full border border-gray-300 rounded-md p-2 mt-1" required>
            <label for="apellido" class="block mt-2">Apellido:</label>
            <input placeholder="Escriba su apellido" type="text" name="contacto[apellido]" id="apellido" class="w-full border border-gray-300 rounded-md p-2 mt-1" required>
            <label for="telefono" class="block mt-2">Teléfono:</label>
            <input placeholder="Escriba su Teléfono" type="text" name="contacto[telefono]" id="telefono" class="w-full border border-gray-300 rounded-md p-2 mt-1">
            <label for="mensaje" class="block mt-2">Mensaje:</label>
            <textarea placeholder="Escriba un mensaje" name="contacto[mensaje]" id="mensaje" class="w-full border border-gray-300 rounded-md p-2 mt-1" required></textarea>
        </fieldset>

        <fieldset class="border border-gray-300 p-4 rounded-md">
            <legend class="text-lg font-bold text-cyan-500">Información sobre un curso</legend>
            <select id="opciones" name="contacto[curso]" class="w-full border border-gray-300 rounded-md p-2 mt-1" required>
                <option value="" disabled selected>--Seleccione--</option>
                <option value="canto">Canto</option>
                <option value="piano">Piano</option>
                <option value="bateria">Bateria</option>
            </select>
        </fieldset>


        <fieldset class="border border-gray-300 p-4 rounded-md">
            <legend class="text-lg font-bold text-cyan-500">Información de medio de contacto</legend>
            <p class="mt-2">Como desea ser contactado?</p>
            <div class="flex items-center mt-1">
                <label for="contactar-telefono" class="mx-4">Teléfono</label>
                <input name="contacto[contacto]" type="radio" value="telefono" id="contactar-telefono" class="form-radio">
                <label for="contactar-email" class="mx-4">E-mail</label>
                <input name="contacto[contacto]" type="radio" value="email" id="contactar-email" class="form-radio">

            </div>
            <div id="contacto"></div>

        </fieldset>
        <input type="submit" value="Enviar" class="text-white bg-cyan-500 rounded-md border-2 border-white w-full p-2 hover:bg-cyan-700 font-semibold">
    </form>
</main>