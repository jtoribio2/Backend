
<?php
// Página de registro de HABITATE.
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro | HABITATE</title>

    <meta
        name="description"
        content="Crea tu cuenta en HABITATE para descubrir viviendas y encontrar tu hogar ideal.">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="./css/output.css">

    <!-- Estilos globales y accesibilidad -->
    <link rel="stylesheet" href="./css/global.css">

    <!-- Estilos específicos del registro -->
    <link rel="stylesheet" href="./css/registre.css">
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
                    id="register-form"
                    action="#"
                    method="post"
                    aria-labelledby="titulo-registro"
                    novalidate>

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
                            aria-describedby="usuario-error"
                            required
                            class="mb-2 rounded-3xl border-3 border-black px-2 py-3 focus-visible:border-[#A16D0D]">

                        <p
                            id="usuario-error"
                            class="error-message">
                        </p>

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
                            aria-describedby="email-error"
                            required
                            class="mb-2 rounded-3xl border-3 border-black px-2 py-3 focus-visible:border-[#A16D0D]">

                        <p
                            id="email-error"
                            class="error-message">
                        </p>

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
                            aria-describedby="password-error"
                            required
                            class="mb-2 rounded-3xl border-3 border-black px-2 py-3 focus-visible:border-[#A16D0D]">

                        <p
                            id="password-error"
                            class="error-message">
                        </p>

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
                            aria-describedby="confirm-password-error"
                            required
                            class="rounded-3xl border-3 border-black px-2 py-3 focus-visible:border-[#A16D0D]">

                        <p
                            id="confirm-password-error"
                            class="error-message">
                        </p>

                    </div>


                    <!-- Botón de registro -->
                    <div class="mt-4 flex justify-center">

                        <button
                            type="submit"
                            class="btn-gold rounded-md transition-opacity hover:opacity-80 focus-visible:outline-3 focus-visible:outline-offset-4 focus-visible:outline-[#A16D0D]"
                            aria-label="Crear cuenta en HABITATE">
                            Crear cuenta
                        </button>

                    </div>

                </form>

            </div>

        </section>

    </main>


    <!-- Notificación accesible de errores -->
    <div
        id="error-summary"
        role="alert"
        aria-live="assertive"
        aria-atomic="true">
    </div>


    <!-- VALIDACIÓN ACCESIBLE DEL FORMULARIO -->
    <script>

        const registerForm = document.getElementById('register-form');

        const usuarioInput = document.getElementById('usuario');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirm_password');

        const usuarioError = document.getElementById('usuario-error');
        const emailError = document.getElementById('email-error');
        const passwordError = document.getElementById('password-error');
        const confirmPasswordError = document.getElementById('confirm-password-error');

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


        // Validar todos los campos
        function validateForm() {

            const errors = [];

            // Limpiar errores anteriores
            clearError(usuarioInput, usuarioError);
            clearError(emailInput, emailError);
            clearError(passwordInput, passwordError);
            clearError(confirmPasswordInput, confirmPasswordError);


            // Validar usuario
            if (usuarioInput.value.trim() === '') {

                showError(
                    usuarioInput,
                    usuarioError,
                    'El nombre de usuario es obligatorio.'
                );

                errors.push({
                    input: usuarioInput,
                    message: 'Debes introducir un nombre de usuario.'
                });

            }


            // Validar correo electrónico
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
                    'Introduce una dirección de correo válida.'
                );

                errors.push({
                    input: emailInput,
                    message: 'El correo electrónico no tiene un formato válido.'
                });

            }


            // Validar contraseña
            if (passwordInput.value === '') {

                showError(
                    passwordInput,
                    passwordError,
                    'La contraseña es obligatoria.'
                );

                errors.push({
                    input: passwordInput,
                    message: 'Debes introducir una contraseña.'
                });

            }


            // Validar repetición de contraseña
            if (confirmPasswordInput.value === '') {

                showError(
                    confirmPasswordInput,
                    confirmPasswordError,
                    'Debes repetir la contraseña.'
                );

                errors.push({
                    input: confirmPasswordInput,
                    message: 'Debes repetir tu contraseña.'
                });

            } else if (passwordInput.value !== confirmPasswordInput.value) {

                showError(
                    confirmPasswordInput,
                    confirmPasswordError,
                    'Las contraseñas no coinciden.'
                );

                errors.push({
                    input: confirmPasswordInput,
                    message: 'Las dos contraseñas deben coincidir.'
                });

            }


            // Actualizar la notificación de errores
            if (errors.length > 0) {

                errorSummary.textContent =
                    'No se ha podido enviar el formulario. ' +
                    errors.map(error => error.message).join(' ');

                errorSummary.classList.add('is-visible');

            } else {

                errorSummary.textContent = '';
                errorSummary.classList.remove('is-visible');

            }

            return errors;

        }


        // Validar al enviar el formulario
        registerForm.addEventListener('submit', function (event) {

            event.preventDefault();

            submittedOnce = true;

            const errors = validateForm();


            // Si existen errores, enfocar el primer campo incorrecto
            if (errors.length > 0) {

                errors[0].input.focus();

                return;

            }


            // Si todos los datos son correctos, volver al login
            window.location.href = 'login.php';

        });


        // Actualizar los errores cuando se modifican los campos
        registerForm.addEventListener('input', function () {

            if (submittedOnce) {

                validateForm();

            }

        });

    </script>

</body>
</html>
