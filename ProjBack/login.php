<?php
// De momento, solo mostramos el diseño del login.
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | HABITATE</title>

    <link rel="stylesheet" href="./css/output.css">
</head>

<body class="min-h-screen bg-[#F8F7F4] text-[#252525]">

    <main class="grid min-h-screen grid-cols-1 md:grid-cols-2">

        <!-- Panel izquierdo: logo -->
        <section class="relative flex min-h-[260px] items-center justify-center overflow-hidden bg-[#203B3B] md:min-h-screen">

            <div class="flex flex-col items-center gap-6">

                <!-- Logo geométrico -->
                <img
                    src="./assets/images/logo.svg"
                    alt="Logo de la aplicación"
                    class="w-150 h-150 mx-auto mb-4" />
            </div>

            <!-- Detalle decorativo -->
            <div class="absolute -bottom-24 -left-24 h-64 w-64 rounded-full border border-[#C6A15B]/20"></div>
            <div class="absolute -right-20 -top-20 h-56 w-56 rounded-full border border-[#C6A15B]/20"></div>

        </section>


        <!-- Panel derecho: formulario -->
        <section class="flex items-center justify-center px-6 py-12 sm:px-12 lg:px-20">

            <div class=" max-w-md">

                <div class="mb-6 text-center">
                    <h1 class="text-6xl font-bold italic tracking-tight sm:text-8xl font-['Inter']">
                        LOGIN
                    </h1>
                </div>


                <form action="#" method="post">

                    <!-- Usuario -->
                    <div class="flex flex-col gap-2 ">
                        <label
                            for="email"
                            class="font-['Inter'] font-extralight text-xs">
                            Usuario / Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Introduce tu correo"
                            autocomplete="username"
                            class="rounded-3xl border-3 border-black px-2 py-3 mb-2">
                    </div>


                    <!-- Contraseña -->
                    <div class="flex flex-col gap-2">
                        <label
                            for="password"
                            class="font-['Inter'] font-extralight text-xs">
                            Contraseña
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Introduce tu contraseña"
                            autocomplete="current-password"
                            class="rounded-3xl border-3 border-black px-2 py-3">
                    </div>


                    <!-- Recuperar contraseña -->
                    <div class="mt-1">
                        <a
                            href="#"

                            class="text-xs">
                            He olvidado mi contraseña
                        </a>
                    </div>

                    <div class="mt-4 flex justify-center">
                        <!-- Botón de acceso -->
                        <button
                            type="button"
                            class="btn-gold"
                            onclick="window.location.href='principal.php'">
                            Iniciar sesión
                        </button>
                    </div>
                </form>
            </div>

        </section>

    </main>

</body>

</html>