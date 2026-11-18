
<?php
// Página de registro de HABITATE.
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro | HABITATE</title>
    <meta name="description" content="Crea tu cuenta en HABITATE para descubrir viviendas y encontrar tu hogar ideal.">

    <link rel="stylesheet" href="./css/output.css">

    <!-- Estilos específicos de accesibilidad -->
    <style>
        /* Enlace para saltar al contenido principal */
        .skip-link {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .skip-link:focus {
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 100;
            width: auto;
            height: auto;
            margin: 0;
            padding: 1rem;
            overflow: visible;
            clip: auto;
            white-space: normal;
            background: #FFFFFF;
            color: #252525;
            outline: 3px solid #A16D0D;
            outline-offset: 3px;
        }

        /* Foco visible para campos y botones */
        input:focus-visible,
        button:focus-visible {
            outline: 3px solid #A16D0D;
            outline-offset: 3px;
        }

        /* Mejorar la visibilidad de los campos */
        input {
            color: #252525;
        }

        input::placeholder {
            color: #595959;
            opacity: 1;
        }

        /* Evitar desbordamientos de imágenes */
        img {
            max-width: 100%;
        }

        html {
            scroll-behavior: auto;
        }
    </style>
</head>

<body class="min-h-screen bg-[#F8F7F4] text-[#252525]">

    <!-- Enlace para saltar al contenido principal -->
    <a href="#main" class="skip-link">
        Saltar al contenido principal
    </a>

    <main
        id="main"
        class="grid min-h-screen grid-cols-1 md:grid-cols-2">

        <!-- PANEL IZQUIERDO: LOGO -->
        <section
            class="relative flex min-h-[16rem] items-center justify-center overflow-hidden bg-[#203B3B] md:min-h-screen"
            aria-label="Identidad visual de HABITATE">

            <div class="flex flex-col items-center gap-6">

                <!-- Logo de HABITATE -->
                <img
                    src="./assets/images/logo.svg"
                    alt="HABITATE"
                    class="w-150 h-150 mx-auto mb-4">

            </div>

            <!-- Detalles decorativos -->
            <div
                class="absolute -bottom-24 -left-24 h-64 w-64 rounded-full border border-[#C6A15B]/20"
                aria-hidden="true">
            </div>

            <div
                class="absolute -right-20 -top-20 h-56 w-56 rounded-full border border-[#C6A15B]/20"
                aria-hidden="true">
            </div>

        </section>


        <!-- PANEL DERECHO: FORMULARIO -->
        <section
            class="flex items-center justify-center px-6 py-12 sm:px-12 lg:px-20"
            aria-labelledby="titulo-registro">

            <div class="w-full max-w-md">

                <!-- Título -->
                <div class="mb-6 text-center">

                    <h1
                        id="titulo-registro"
                        class="font-['Inter'] text-6xl font-bold italic tracking-tight sm:text-8xl">

                        REGISTRO

                    </h1>

                </div>


                <!-- Formulario de registro -->
                <form
                    action="#"
                    method="post"
                    aria-labelledby="titulo-registro">

                    <!-- Usuario -->
                    <div class="flex flex-col gap-2">

                        <label
                            for="usuario"
                            class="font-['Inter'] text-xs font-extralight">

                            Usuario

                        </label>

                        <input
                            type="text"
                            id="usuario"
                            name="usuario"
                            placeholder="Introduce tu usuario"
                            autocomplete="username"
                            class="mb-2 rounded-3xl border-3 border-black px-2 py-3 focus-visible:border-[#A16D0D]">

                    </div>


                    <!-- Correo electrónico -->
                    <div class="flex flex-col gap-2">

                        <label
                            for="email"
                            class="font-['Inter'] text-xs font-extralight">

                            Correo electrónico

                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Introduce tu correo"
                            autocomplete="email"
                            class="mb-2 rounded-3xl border-3 border-black px-2 py-3 focus-visible:border-[#A16D0D]">

                    </div>


                    <!-- Contraseña -->
                    <div class="flex flex-col gap-2">

                        <label
                            for="password"
                            class="font-['Inter'] text-xs font-extralight">

                            Contraseña

                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Introduce tu contraseña"
                            autocomplete="new-password"
                            class="mb-2 rounded-3xl border-3 border-black px-2 py-3 focus-visible:border-[#A16D0D]">

                    </div>


                    <!-- Repetir contraseña -->
                    <div class="flex flex-col gap-2">

                        <label
                            for="confirm_password"
                            class="font-['Inter'] text-xs font-extralight">

                            Repetir la contraseña

                        </label>

                        <input
                            type="password"
                            id="confirm_password"
                            name="confirm_password"
                            placeholder="Repite tu contraseña"
                            autocomplete="new-password"
                            class="rounded-3xl border-3 border-black px-2 py-3 focus-visible:border-[#A16D0D]">

                    </div>


                    <!-- Botón de registro -->
                    <div class="mt-4 flex justify-center">

                        <button
                            type="button"
                            class="btn-gold rounded-md transition-opacity hover:opacity-80 focus-visible:outline-3 focus-visible:outline-offset-4 focus-visible:outline-[#A16D0D]"
                            aria-label="Crear cuenta en HABITATE"
                            onclick="window.location.href='login.php'">

                            Crear cuenta

                        </button>

                    </div>

                </form>

            </div>

        </section>

    </main>

</body>

</html>
