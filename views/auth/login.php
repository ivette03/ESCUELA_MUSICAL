<main class="flex justify-center items-center flex-col space-y-4 ">
    <h1>Login</h1>
    <form class="max-w-md w-full p-5 border-4 border-cyan-500 m-5" method="POST" action='/login'>
    <?php foreach($errores as $error): ?>
            <div class="bg-red-600 text-white font-medium m-3 text-center p-2">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <div>
            <label>Email</label>
            <input type="email" placeholder="Ingrese su email" class="block" name="login[email]">
        </div>
        <div>
            <label>Password</label>
            <input type="password" placeholder="Ingrese su contraseña" class="block" name="login[password]">
        </div>
        <input type="submit" value="Iniciar Sesión" class="p-2 m-5 bg-cyan-500 text-white font-semibold">
    </form>
</main>
