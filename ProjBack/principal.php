<?php
// Página principal de HABITATE.
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HABITATE | Encuentra tu vivienda ideal</title>

    <link rel="stylesheet" href="./css/output.css">
</head>

<body class="h-screen overflow-hidden bg-[#F8F7F4] text-[#252525]">

    <div class="flex h-full flex-col overflow-hidden">

        <!-- CABECERA -->
        <header class="flex h-[60px] shrink-0 items-center justify-between border-b-[3px] border-[#203B3B] pl-1 pr-1">

            <!-- Logo superior izquierdo -->
            <a
                href="principal.php"
                class="ml-0 block h-14 w-64 shrink-0"
                aria-label="HABITATE, inicio">

                <img
                    src="./assets/images/logo.svg"
                    alt="Logo de HABITATE"
                    class="h-full w-full object-contain object-left px-8">

            </a>

            <!-- Valoración -->
            <div
                class="hidden items-center gap-3 text-4xl text-[#C6A15B] sm:flex"
                aria-label="Valoración de cuatro estrellas">

                <span>★</span>
                <span>★</span>
                <span>★</span>
                <span>★</span>

            </div>

            <!-- Menú -->
            <button
                type="button"
                class="flex flex-col gap-1.5 p-2 px-8"
                aria-label="Abrir menú">

                <span class="h-1 w-10 bg-[#252525]"></span>
                <span class="h-1 w-10 bg-[#252525]"></span>
                <span class="h-1 w-10 bg-[#252525]"></span>

            </button>

        </header>

        <!-- CONTENIDO PRINCIPAL -->
        <main class="grid min-h-0 flex-1 grid-cols-1 gap-4 overflow-hidden p-3 lg:grid-cols-[minmax(0,1fr)_220px]">

            <!-- ZONA IZQUIERDA -->
            <section class="flex min-h-0 min-w-0 flex-col">

                <!-- Título -->
                <h1 class="mb-4 mt-2 shrink-0 text-center font-['Inter'] text-2xl font-bold italic sm:text-4xl">
                    ENCUENTRA TU VIVIENDA IDEAL
                </h1>

                <!-- TARJETA DE NOVEDADES -->
                <article class="grid min-h-0 flex-1 grid-cols-1 gap-4 overflow-hidden bg-[#203B3B] p-4 text-[#F8F7F4] sm:grid-cols-2 sm:items-center">

                    <!-- Foto principal: casa 1 -->
                    <div class="aspect-[4/3] w-full overflow-hidden bg-[#788B7E] sm:aspect-auto sm:h-full sm:max-h-[420px]">

                        <img
                            src="./assets/images/casa1.jpg"
                            alt="Vivienda destacada"
                            class="h-full w-full object-cover">

                    </div>

                    <!-- Información de la vivienda -->
                    <div class="flex min-h-0 h-full flex-col self-start">

                        <h2 class="mb-7 mt-0 text-center font-['Inter'] text-2xl font-bold italic sm:text-5xl">
                            NOVETATS
                        </h2>

                        <h3 class="mb-2 mt-7 font-['Inter'] text-xl font-bold italic sm:text-3xl">
                            Villa Mediterrània
                        </h3>

                        <p class="text-xs leading-relaxed italic sm:text-sm">
                            Exclusiva vivienda unifamiliar con amplios espacios, jardín privado
                            y piscina. Dispone de 4 habitaciones, 3 baños y un luminoso salón
                            con grandes ventanales. Situada en una zona residencial tranquila,
                            ideal para disfrutar en familia.
                        </p>

                        <p class="mt-3 text-sm font-semibold sm:text-base">
                            685.000 €
                        </p>

                        <p class="mt-auto pt-3 text-right text-xs italic sm:text-sm">
                            Propietari: Carlos Martínez
                        </p>

                    </div>

                </article>

                <!-- INDICADORES DEL CARRUSEL CON FOTOS -->
                <div class="mt-3 grid shrink-0 grid-cols-1 sm:grid-cols-2">

                    <!-- Espacio vacío debajo de la foto principal -->
                    <div class="hidden sm:block"></div>

                    <!-- Miniaturas de viviendas -->
                    <div class="grid grid-cols-4 gap-2 bg-[#203B3B] p-2">

                        <a href="#" aria-label="Ver vivienda 4"
                            class="block h-16 overflow-hidden">
                            <img
                                src="./assets/images/casa4.jpg"
                                alt="Vivienda 4"
                                class="h-full w-full object-cover">
                        </a>

                        <a href="#" aria-label="Ver vivienda 5"
                            class="block h-16 overflow-hidden">
                            <img
                                src="./assets/images/casa5.jpg"
                                alt="Vivienda 5"
                                class="h-full w-full object-cover">
                        </a>

                        <a href="#" aria-label="Ver vivienda 6"
                            class="block h-16 overflow-hidden">
                            <img
                                src="./assets/images/casa6.jpg"
                                alt="Vivienda 6"
                                class="h-full w-full object-cover">
                        </a>

                        <a href="#" aria-label="Ver vivienda 7"
                            class="block h-16 overflow-hidden">
                            <img
                                src="./assets/images/casa7.jpg"
                                alt="Vivienda 7"
                                class="h-full w-full object-cover">
                        </a>

                    </div>

                </div>

            </section>

            <!-- BARRA LATERAL -->
            <aside class="grid min-h-0 grid-rows-3 gap-4 bg-[#203B3B] p-4">

                <!-- Vivienda 2 -->
                <a
                    href="#"
                    class="block min-h-0 overflow-hidden bg-[#788B7E]"
                    aria-label="Ver vivienda 2">

                    <img
                        src="./assets/images/casa2.jpg"
                        alt="Vivienda 2"
                        class="h-full w-full object-cover">

                </a>

                <!-- Vivienda 3 -->
                <a
                    href="#"
                    class="block min-h-0 overflow-hidden bg-[#788B7E]"
                    aria-label="Ver vivienda 3">

                    <img
                        src="./assets/images/casa3.jpg"
                        alt="Vivienda 3"
                        class="h-full w-full object-cover">

                </a>

                <!-- Vivienda 4 -->
                <a
                    href="#"
                    class="block min-h-0 overflow-hidden bg-[#788B7E]"
                    aria-label="Ver vivienda 4">

                    <img
                        src="./assets/images/casa4.jpg"
                        alt="Vivienda 4"
                        class="h-full w-full object-cover">

                </a>

            </aside>

        </main>

        <!-- PIE DE PÁGINA -->
        <footer class="flex h-10 shrink-0 items-center justify-between border-t-[3px] border-[#203B3B] px-6">

            <!-- Estrellas -->
            <div
                class="flex gap-5 text-3xl text-[#252525]"
                aria-label="Tres estrellas">

                <span>★</span>
                <span>★</span>
                <span>★</span>

            </div>

            <p class="text-xs italic">
                @2026 Viviendas
            </p>

        </footer>

    </div>

</body>

</html>