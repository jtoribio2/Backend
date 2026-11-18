
<?php
// Página principal de HABITATE.
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HABITATE | Encuentra tu vivienda ideal</title>
    <meta name="description" content="Descubre viviendas destacadas y encuentra tu hogar ideal con HABITATE.">

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

        /* Foco visible para enlaces y botones */
        a:focus-visible,
        button:focus-visible {
            outline: 3px solid #A16D0D;
            outline-offset: 3px;
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

    <!-- Enlace para saltar directamente al contenido principal -->
    <a href="#main" class="skip-link">
        Saltar al contenido principal
    </a>

    <div class="flex min-h-screen flex-col">

        <!-- CABECERA -->
        <header class="flex shrink-0 items-center justify-between border-b-[3px] border-[#203B3B] pl-1 pr-1">

            <!-- Logo -->
            <a
                href="principal.php"
                class="block h-14 w-64 shrink-0"
                aria-label="HABITATE, ir a inicio">

                <img
                    src="./assets/images/logo.svg"
                    alt=""
                    class="h-full w-full object-contain object-left px-8">

            </a>

            <!-- Botón de valoración -->
            <button
                type="button"
                class="flex items-center gap-3 rounded-md p-2 text-4xl text-[#a16d0d] transition-colors hover:bg-[#203B3B]/10 focus-visible:outline-3 focus-visible:outline-offset-4 focus-visible:outline-[#A16D0D]"
                aria-label="Valoración de HABITATE, botón de valoración">

                <span aria-hidden="true">★</span>
                <span aria-hidden="true">★</span>
                <span aria-hidden="true">★</span>
                <span aria-hidden="true">★</span>

            </button>

            <!-- Botón del menú -->
            <button
                type="button"
                class="flex flex-col gap-1.5 rounded-md p-2 px-8 transition-colors hover:bg-[#203B3B]/10 focus-visible:outline-3 focus-visible:outline-offset-4 focus-visible:outline-[#A16D0D]"
                aria-label="Abrir menú de navegación">

                <span class="h-1 w-10 bg-[#252525]" aria-hidden="true"></span>
                <span class="h-1 w-10 bg-[#252525]" aria-hidden="true"></span>
                <span class="h-1 w-10 bg-[#252525]" aria-hidden="true"></span>

            </button>

        </header>


        <!-- CONTENIDO PRINCIPAL -->
        <main
            id="main"
            class="grid flex-1 grid-cols-1 gap-4 p-3 lg:grid-cols-[minmax(0,1fr)_220px]">

            <!-- ZONA IZQUIERDA -->
            <section
                class="flex min-w-0 flex-col"
                aria-labelledby="titulo-principal">

                <!-- Título principal -->
                <h1
                    id="titulo-principal"
                    class="mb-4 mt-2 shrink-0 text-center font-['Inter'] text-2xl font-bold italic sm:text-4xl">

                    ENCUENTRA TU VIVIENDA IDEAL

                </h1>


                <!-- TARJETA DE NOVEDADES -->
                <article
                    class="grid flex-1 grid-cols-1 gap-4 bg-[#203B3B] p-4 text-[#F8F7F4] sm:grid-cols-2 sm:items-center"
                    aria-labelledby="titulo-vivienda">

                    <!-- Fotografía principal seleccionable -->
                    <a
                        href="#"
                        class="block aspect-[4/3] w-full overflow-hidden bg-[#788B7E] focus-visible:outline-3 focus-visible:outline-offset-4 focus-visible:outline-[#A16D0D] sm:aspect-auto sm:h-full sm:max-h-96"
                        aria-label="Fotografía principal de Villa Mediterrània">

                        <img
                            src="./assets/images/casa1.jpg"
                            alt="Villa Mediterrània, vivienda con jardín privado y piscina"
                            class="h-full w-full object-cover">

                    </a>


                    <!-- Información de la vivienda -->
                    <div class="flex min-w-0 flex-col self-start">

                        <h2 class="mb-7 mt-0 text-center font-['Inter'] text-2xl font-bold italic sm:text-5xl">
                            NOVETATS
                        </h2>

                        <h3
                            id="titulo-vivienda"
                            class="mb-2 mt-7 font-['Inter'] text-xl font-bold italic sm:text-3xl">

                            Villa Mediterrània

                        </h3>

                        <p class="text-xs leading-relaxed italic sm:text-sm">

                            Exclusiva vivienda unifamiliar con amplios espacios, jardín privado
                            y piscina. Dispone de 4 habitaciones, 3 baños y un luminoso salón
                            con grandes ventanales. Situada en una zona residencial tranquila,
                            ideal para disfrutar en familia.

                        </p>

                        <p class="mt-3 text-sm font-semibold sm:text-base">
                            Precio: 685.000 €
                        </p>

                        <p class="mt-auto pt-3 text-right text-xs italic sm:text-sm">
                            Propietario: Carlos Martínez
                        </p>

                    </div>

                </article>


                <!-- MINIATURAS DE OTRAS VIVIENDAS -->
                <section
                    class="mt-3 grid shrink-0 grid-cols-1 sm:grid-cols-2"
                    aria-label="Fotografías de otras viviendas destacadas">

                    <!-- Espacio vacío debajo de la foto principal -->
                    <div class="hidden sm:block" aria-hidden="true"></div>

                    <!-- Miniaturas seleccionables -->
                    <div class="grid grid-cols-4 gap-2 bg-[#203B3B] p-2">

                        <a
                            href="#"
                            class="block h-16 overflow-hidden"
                            aria-label="Seleccionar fotografía de la vivienda 4">

                            <img
                                src="./assets/images/casa4.jpg"
                                alt=""
                                class="h-full w-full object-cover">

                        </a>

                        <a
                            href="#"
                            class="block h-16 overflow-hidden"
                            aria-label="Seleccionar fotografía de la vivienda 5">

                            <img
                                src="./assets/images/casa5.jpg"
                                alt=""
                                class="h-full w-full object-cover">

                        </a>

                        <a
                            href="#"
                            class="block h-16 overflow-hidden"
                            aria-label="Seleccionar fotografía de la vivienda 6">

                            <img
                                src="./assets/images/casa6.jpg"
                                alt=""
                                class="h-full w-full object-cover">

                        </a>

                        <a
                            href="#"
                            class="block h-16 overflow-hidden"
                            aria-label="Seleccionar fotografía de la vivienda 7">

                            <img
                                src="./assets/images/casa7.jpg"
                                alt=""
                                class="h-full w-full object-cover">

                        </a>

                    </div>

                </section>

            </section>


            <!-- BARRA LATERAL -->
            <aside
                class="grid grid-rows-3 gap-4 bg-[#203B3B] p-4"
                aria-label="Otras viviendas destacadas">

                <!-- Vivienda 2 -->
                <a
                    href="#"
                    class="block min-h-48 overflow-hidden bg-[#788B7E]"
                    aria-label="Seleccionar fotografía de la vivienda 2">

                    <img
                        src="./assets/images/casa2.jpg"
                        alt=""
                        class="h-full w-full object-cover">

                </a>

                <!-- Vivienda 3 -->
                <a
                    href="#"
                    class="block min-h-48 overflow-hidden bg-[#788B7E]"
                    aria-label="Seleccionar fotografía de la vivienda 3">

                    <img
                        src="./assets/images/casa3.jpg"
                        alt=""
                        class="h-full w-full object-cover">

                </a>

                <!-- Vivienda 4 -->
                <a
                    href="#"
                    class="block min-h-48 overflow-hidden bg-[#788B7E]"
                    aria-label="Seleccionar fotografía de la vivienda 4">

                    <img
                        src="./assets/images/casa4.jpg"
                        alt=""
                        class="h-full w-full object-cover">

                </a>

            </aside>

        </main>


        <!-- PIE DE PÁGINA -->
        <footer class="flex min-h-10 shrink-0 items-center justify-between gap-4 border-t-[3px] border-[#203B3B] px-6 py-2">

            <!-- Estrellas decorativas -->
            <div
                class="flex gap-5 text-3xl text-[#252525]"
                aria-hidden="true">

                <span>★</span>
                <span>★</span>
                <span>★</span>

            </div>

            <p class="text-xs italic">
                © 2026 Viviendas
            </p>

        </footer>

    </div>

</body>

</html>
