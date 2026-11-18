
<?php
// De momento, solo mostramos el diseño del login.
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | HABITATE</title>
    <meta name="description" content="Inicia sesión en HABITATE para acceder a tu cuenta.">

    <link rel="stylesheet" href="./css/output.css">

    <style>
        .skip-link {
            position: absolute;
            top: -100px;
            left: 1rem;
            z-index: 100;
            padding: 0.75rem 1rem;
            background: #F8F7F4;
            color: #252525;
            border: 2px solid #A16D0D;
            border-radius: 0.5rem;
        }

        .skip-link:focus {
            top: 1rem;
        }

        a:focus-visible,
        button:focus-visible,
        input:focus-visible {
            outline: 3px solid #A16D0D;
            outline-offset: 4px;
        }

        input {
            color: #252525;
        }

        input::placeholder {
            color: #595959;
            opacity: 1;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        html {
            scroll-behavior: auto;
        }
    </style>
</head>

<body class="min-h-screen bg-[#F8F7F4] text-[#252525]">

    <a href="#main" class="skip-link">
        Saltar al contenido principal
    </a>

    <main id="main" class="grid min-h-screen grid-cols-1 md:grid-cols-2">

        <!-- Panel izquierdo: logo -->
        <section
            class="relative flex min-h-[260px] items-center justify-center overflow-hidden bg-[#203B3B] md:min-h-screen"
            aria-label="Identidad visual de HABITATE">

            <div class="flex flex-col items-center gap-6">

                <!-- Logo geométrico -->
                <img
                    src="./assets/images/logo.svg"
                    alt="HABITATE"
                    class="w-150 h-150 mx-auto mb-4" />

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


        <!-- Panel derecho: formulario -->
        <section
            class="flex items-center justify-center px-6 py-12 sm:px-12 lg:px-20"
            aria-labelledby="titulo-login">

            <div class="max-w-md">

                <div class="mb-6 text-center">
                    <h1
                        id="titulo-login"
                        class="text-6xl font-bold italic tracking-tight sm:text-8xl font-['Inter']">
                        LOGIN
                    </h1>
                </div>


                <form action="#" method="post" aria-labelledby="titulo-login">

                    <!-- Usuario -->
                    <div class="flex flex-col gap-2">

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
                            class="rounded-3xl border-3 border-black px-2 py-3 mb-2 focus-visible:border-[#A16D0D]">

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
                            class="rounded-3xl border-3 border-black px-2 py-3 focus-visible:border-[#A16D0D]">

                    </div>


                    <!-- Recuperar contraseña -->
                    <div class="mt-1">

                        <a
                            href="#"
                            class="text-xs">
                            He olvidado mi contraseña
                        </a>

                    </div>


                    <!-- Botones -->
                    <div class="mt-4 flex justify-center gap-4">

                        <button
                            type="button"
                            onclick="window.location.href='principal.php'"
                            class="btn-gold rounded-md transition-opacity hover:opacity-80 focus-visible:outline-3 focus-visible:outline-offset-4 focus-visible:outline-[#A16D0D]"
                            aria-label="Iniciar sesión en HABITATE">
                            Iniciar sesión
                        </button>

                        <button
                            type="button"
                            onclick="window.location.href='registre.php'"
                            class="btn-gold rounded-md transition-opacity hover:opacity-80 focus-visible:outline-3 focus-visible:outline-offset-4 focus-visible:outline-[#A16D0D]"
                            aria-label="Ir al registro de HABITATE">
                            Registre
                        </button>

                    </div>

                </form>

            </div>

        </section>

    </main>

</body>

</html>
