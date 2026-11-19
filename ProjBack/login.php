
<?php
// De momento, solo mostramos el diseño del login.
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | HABITATE</title>

    <meta
        name="description"
        content="Inicia sesión en HABITATE para acceder a tu cuenta.">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="./css/output.css">

    <!-- Estilos globales y accesibilidad -->
    <link rel="stylesheet" href="./css/global.css">

    <!-- Estilos específicos del login -->
    <link rel="stylesheet" href="./css/login.css">
</head>

<body class="min-h-screen bg-[#F8F7F4] text-[#252525]">

    <!-- Enlace para saltar al contenido principal -->
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

            <div class="max-w-md w-full">

                <div class="mb-6 text-center">

                    <h1
                        id="titulo-login"
                        class="text-6xl font-bold italic tracking-tight sm:text-8xl font-['Inter']">
                        LOGIN
                    </h1>

                </div>


                <!-- Formulario -->
                <form
                    id="login-form"
                    action="#"
                    method="post"
                    aria-labelledby="titulo-login"
                    novalidate>

                    <!-- Usuario / correo electrónico -->
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
                            aria-describedby="email-error"
                            required
                            class="rounded-3xl border-3 border-black px-2 py-3 mb-2 focus-visible:border-[#A16D0D]">

                        <p
                            id="email-error"
                            class="error-message">
                        </p>

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
                            aria-describedby="password-error"
                            required
                            class="rounded-3xl border-3 border-black px-2 py-3 focus-visible:border-[#A16D0D]">

                        <p
                            id="password-error"
                            class="error-message">
                        </p>

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

                        <!-- Botón de acceso -->
                        <button
                            type="submit"
                            class="btn-gold rounded-md transition-opacity hover:opacity-80 focus-visible:outline-3 focus-visible:outline-offset-4 focus-visible:outline-[#A16D0D]"
                            aria-label="Iniciar sesión en HABITATE">
                            Iniciar sesión
                        </button>

                        <!-- Botón de registro -->
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


    <!-- Resumen flotante accesible de errores -->
    <div
        id="error-summary"
        role="alert"
        aria-live="assertive"
        tabindex="-1">
    </div>


    <!-- Validación accesible del formulario -->
    <script>

        const loginForm = document.getElementById('login-form');

        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');

        const emailError = document.getElementById('email-error');
        const passwordError = document.getElementById('password-error');

        const errorSummary = document.getElementById('error-summary');

        let submittedOnce = false;


        // Mostrar un error en un campo
        function showError(input, errorElement, message) {

            input.setAttribute('aria-invalid', 'true');
            input.classList.add('input-error');
            errorElement.textContent = message;

        }


        // Limpiar el error de un campo
        function clearError(input, errorElement) {

            input.removeAttribute('aria-invalid');
            input.classList.remove('input-error');
            errorElement.textContent = '';

        }


        // Mostrar el resumen flotante de errores
        function showErrorSummary(errors) {

            errorSummary.textContent =
                'No se ha podido enviar el formulario. ' +
                errors.map(error => error.message).join(' ');

            errorSummary.classList.add('is-visible');

        }


        // Ocultar el resumen de errores
        function clearErrorSummary() {

            errorSummary.textContent = '';
            errorSummary.classList.remove('is-visible');

        }


        // Validar los campos
        function validateForm() {

            clearError(emailInput, emailError);
            clearError(passwordInput, passwordError);
            clearErrorSummary();

            const errors = [];


            // Comprobar el correo electrónico
            if (emailInput.value.trim() === '') {

                showError(
                    emailInput,
                    emailError,
                    'El correo electrónico es obligatorio.'
                );

                errors.push({
                    input: emailInput,
                    message: 'Debes introducir tu correo electrónico.'
                });

            } else if (emailInput.validity.typeMismatch) {

                showError(
                    emailInput,
                    emailError,
                    'Introduce una dirección de correo electrónico válida.'
                );

                errors.push({
                    input: emailInput,
                    message: 'El correo electrónico no tiene un formato válido.'
                });

            }


            // Comprobar la contraseña
            if (passwordInput.value.trim() === '') {

                showError(
                    passwordInput,
                    passwordError,
                    'La contraseña es obligatoria.'
                );

                errors.push({
                    input: passwordInput,
                    message: 'Debes introducir tu contraseña.'
                });

            }


            // Si existen errores, mostrarlos
            if (errors.length > 0) {

                showErrorSummary(errors);

                // Llevar el foco al primer campo incorrecto
                errors[0].input.focus();

                return false;

            }

            return true;

        }


        // Validar el formulario al enviarlo
        loginForm.addEventListener('submit', function (event) {

            event.preventDefault();

            submittedOnce = true;

            // Si hay errores, detener el envío
            if (!validateForm()) {
                return;
            }

            // Si los datos son válidos, continuar
            window.location.href = 'principal.php';

        });


        // Volver a validar al modificar el correo
        emailInput.addEventListener('input', function () {

            if (submittedOnce) {
                validateForm();
            }

        });


        // Volver a validar al modificar la contraseña
        passwordInput.addEventListener('input', function () {

            if (submittedOnce) {
                validateForm();
            }

        });

    </script>

</body>
</html>
