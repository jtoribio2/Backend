
<?php
/*
|--------------------------------------------------------------------------
| VIVIENDAS DE EJEMPLO
|--------------------------------------------------------------------------
| Datos ficticios para visualizar el catálogo.
| Posteriormente se sustituirán por los datos de MySQL.
*/

$viviendas = [
    [
        "id" => 1,
        "direccion" => "Carrer del Mar, 25 - Blanes",
        "descripcion" => "Amplio apartamento cerca de la playa, con dos habitaciones, terraza y mucha luz natural.",
        "preu" => 185000,
        "dni_propietari" => "00000001A"
    ],
    [
        "id" => 2,
        "direccion" => "Avinguda Catalunya, 48 - Blanes",
        "descripcion" => "Casa familiar con jardín privado, garaje y tres habitaciones. Situada en una zona tranquila.",
        "preu" => 320000,
        "dni_propietari" => "00000002B"
    ],
    [
        "id" => 3,
        "direccion" => "Carrer de la Vila, 12 - Lloret de Mar",
        "descripcion" => "Piso moderno reformado recientemente, con cocina equipada y balcón exterior.",
        "preu" => 149000,
        "dni_propietari" => "00000003C"
    ],
    [
        "id" => 4,
        "direccion" => "Passeig de Pau Casals, 8 - Tossa de Mar",
        "descripcion" => "Vivienda con vistas al mar, tres habitaciones, dos baños y una amplia terraza.",
        "preu" => 425000,
        "dni_propietari" => "00000004D"
    ],
    [
        "id" => 5,
        "direccion" => "Carrer Girona, 63 - Blanes",
        "descripcion" => "Piso luminoso de dos habitaciones, salón comedor, cocina independiente y ascensor.",
        "preu" => 165000,
        "dni_propietari" => "00000005E"
    ],
    [
        "id" => 6,
        "direccion" => "Urbanització Mas Florit, 15 - Blanes",
        "descripcion" => "Chalet independiente con piscina privada, jardín, cuatro habitaciones y garaje.",
        "preu" => 510000,
        "dni_propietari" => "00000006F"
    ],
    [
        "id" => 7,
        "direccion" => "Carrer Sant Pere, 31 - Malgrat de Mar",
        "descripcion" => "Apartamento céntrico próximo a comercios y transporte público. Ideal como primera vivienda.",
        "preu" => 138000,
        "dni_propietari" => "00000007G"
    ],
    [
        "id" => 8,
        "direccion" => "Carrer de la Riera, 9 - Palafolls",
        "descripcion" => "Casa adosada con patio exterior, tres dormitorios, cocina amplia y plaza de aparcamiento.",
        "preu" => 275000,
        "dni_propietari" => "00000008H"
    ],
    [
        "id" => 9,
        "direccion" => "Passeig de s'Abanell, 102 - Blanes",
        "descripcion" => "Ático con terraza panorámica, dos habitaciones y vistas despejadas cerca del paseo marítimo.",
        "preu" => 295000,
        "dni_propietari" => "00000009J"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Todas las viviendas | HABITATE</title>

    <meta
        name="description"
        content="Consulta todas las viviendas de HABITATE y encuentra tu próximo hogar.">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="./css/output.css">

    <!-- Estilos globales y accesibilidad -->
    <link rel="stylesheet" href="./css/global.css">

    <!-- Estilos propios de la página de viviendas -->
    <link rel="stylesheet" href="./css/viviendas.css">
</head>

<body class="min-h-screen bg-[#F8F7F4] text-[#252525]">

    <!-- ENLACE PARA SALTAR AL CONTENIDO -->
    <a href="#main" class="skip-link">
        Saltar al contenido principal
    </a>

    <div class="flex min-h-screen flex-col">

        <!-- CABECERA: IGUAL QUE PRINCIPAL.PHP -->
        <header class="flex shrink-0 items-center justify-between border-b-[3px] border-[#203B3B] pl-1 pr-1">

            <!-- LOGO -->
            <a
                href="principal.php"
                class="block h-14 w-64 shrink-0"
                aria-label="HABITATE, ir a inicio">

                <img
                    src="./assets/images/logo.svg"
                    alt=""
                    class="h-full w-full object-contain object-left px-8">

            </a>

            <!-- VALORACIÓN -->
            <button
                type="button"
                class="flex items-center gap-3 rounded-md p-2 text-4xl text-[#a16d0d] transition-colors hover:bg-[#203B3B]/10"
                aria-label="Valoración de HABITATE, botón de valoración">

                <span aria-hidden="true">★</span>
                <span aria-hidden="true">★</span>
                <span aria-hidden="true">★</span>
                <span aria-hidden="true">★</span>

            </button>

            <!-- MENÚ -->
            <button
                type="button"
                class="flex flex-col gap-1.5 rounded-md p-2 px-8 transition-colors hover:bg-[#203B3B]/10"
                aria-label="Abrir menú de navegación">

                <span class="h-1 w-10 bg-[#252525]" aria-hidden="true"></span>
                <span class="h-1 w-10 bg-[#252525]" aria-hidden="true"></span>
                <span class="h-1 w-10 bg-[#252525]" aria-hidden="true"></span>

            </button>

        </header>


        <!-- CONTENIDO PRINCIPAL -->
        <main id="main" class="page-container flex-1" tabindex="-1">

            <!-- TÍTULO -->
            <section class="page-heading" aria-labelledby="page-title">

                <p class="eyebrow">
                    HABITATE · INMOBILIARIA
                </p>

                <h1 id="page-title" class="page-title">
                    TODAS LAS VIVIENDAS
                </h1>

                <div class="title-decoration" aria-hidden="true"></div>

                <p class="page-description">
                    Descubre nuestra selección de viviendas y encuentra tu próximo hogar.
                </p>

            </section>


            <!-- BUSCADOR Y CONTADOR -->
            <section class="toolbar" aria-label="Búsqueda de viviendas">

                <div class="search-area">

                    <label for="search" class="search-label">
                        Buscar vivienda
                    </label>

                    <div class="search-box">

                        <span class="search-icon" aria-hidden="true">
                            ⌕
                        </span>

                        <input
                            type="search"
                            id="search"
                            class="search-input"
                            placeholder="Dirección, descripción o DNI..."
                            autocomplete="off"
                            aria-controls="property-grid"
                            aria-describedby="search-help">

                    </div>

                    <span id="search-help" class="sr-only">
                        Escribe para filtrar las viviendas por dirección, descripción o DNI del propietario.
                    </span>

                </div>


                <!-- CONTADOR -->
                <div class="total-box">

                    <span
                        class="total-number"
                        id="total-properties"
                        aria-live="polite"
                        aria-atomic="true">
                        <?= count($viviendas) ?>
                    </span>

                    <div>
                        <p class="total-label">Viviendas</p>
                        <p class="total-subtitle">Registradas</p>
                    </div>

                </div>

            </section>


            <!-- CATÁLOGO -->
            <section aria-labelledby="catalog-title">

                <div class="catalog-heading">

                    <h2 id="catalog-title" class="catalog-title">
                        Catálogo de viviendas
                    </h2>

                    <span class="catalog-label" aria-hidden="true">
                        HABITATE
                    </span>

                </div>


                <!-- TARJETAS DE VIVIENDAS -->
                <div class="property-grid" id="property-grid">

                    <?php foreach ($viviendas as $vivienda): ?>

                        <article
                            class="property-card"
                            tabindex="0"
                            aria-label="Vivienda: <?= htmlspecialchars(
                                $vivienda['direccion'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>"
                            data-search="<?= htmlspecialchars(
                                $vivienda['direccion'] . ' ' .
                                $vivienda['descripcion'] . ' ' .
                                $vivienda['dni_propietari'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>">

                            <!-- ESPACIO DE FOTOGRAFÍA -->
                            <div
                                class="property-image"
                                role="img"
                                aria-label="Imagen de la vivienda no disponible en esta demostración">

                                <span class="property-reference">
                                    REF. #<?= str_pad($vivienda['id'], 3, '0', STR_PAD_LEFT) ?>
                                </span>

                                <span class="property-status">
                                    Disponible
                                </span>

                                <div class="image-placeholder" aria-hidden="true">

                                    <svg viewBox="0 0 64 64">
                                        <path d="M8 29 L32 9 L56 29"></path>
                                        <path d="M14 26 V55 H50 V26"></path>
                                        <path d="M26 55 V38 H38 V55"></path>
                                        <path d="M22 29 H25"></path>
                                        <path d="M39 29 H42"></path>
                                    </svg>

                                    <span>Imagen no disponible</span>

                                </div>

                            </div>


                            <!-- INFORMACIÓN DE LA VIVIENDA -->
                            <div class="property-content">

                                <p class="property-location-label">
                                    Dirección
                                </p>

                                <h3 class="property-address">
                                    <?= htmlspecialchars(
                                        $vivienda['direccion'],
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ) ?>
                                </h3>


                                <p class="property-description-label">
                                    Descripción
                                </p>

                                <p class="property-description">
                                    <?= htmlspecialchars(
                                        $vivienda['descripcion'],
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ) ?>
                                </p>


                                <!-- PRECIO -->
                                <div class="property-price">

                                    <span class="price-label">
                                        Precio de venta
                                    </span>

                                    <span class="price-value">
                                        <?= number_format($vivienda['preu'], 0, ',', '.') ?> €
                                    </span>

                                </div>


                                <!-- PROPIETARIO -->
                                <div class="property-owner">

                                    <span class="owner-label">
                                        DNI propietario
                                    </span>

                                    <span class="owner-value">
                                        <?= htmlspecialchars(
                                            $vivienda['dni_propietari'],
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ) ?>
                                    </span>

                                </div>

                            </div>

                        </article>

                    <?php endforeach; ?>

                </div>


                <!-- MENSAJE SIN RESULTADOS -->
                <p
                    id="no-results"
                    class="no-results"
                    role="status"
                    aria-live="polite"
                    hidden>
                    No se han encontrado viviendas con esa búsqueda.
                    Prueba con otra dirección o término.
                </p>

            </section>

        </main>


        <!-- FOOTER: IGUAL QUE PRINCIPAL.PHP -->
        <footer class="flex min-h-10 shrink-0 items-center justify-between gap-4 border-t-[3px] border-[#203B3B] px-6 py-2">

            <!-- ESTRELLAS DECORATIVAS -->
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


    <!-- BUSCADOR DINÁMICO -->
    <script>
        const searchInput = document.getElementById('search');
        const propertyCards = document.querySelectorAll('.property-card');
        const noResults = document.getElementById('no-results');
        const totalProperties = document.getElementById('total-properties');

        searchInput.addEventListener('input', function () {

            const searchValue = this.value
                .toLocaleLowerCase('es')
                .trim();

            let visibleCards = 0;

            propertyCards.forEach(card => {

                const content = card.dataset.search
                    .toLocaleLowerCase('es');

                const matches = content.includes(searchValue);

                card.hidden = !matches;

                if (matches) {
                    visibleCards++;
                }

            });

            totalProperties.textContent = visibleCards;

            noResults.hidden = visibleCards !== 0;

        });
    </script>

</body>
</html>
