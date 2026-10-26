
<?php
require_once "config/connect.php";
require_once "model/Habitatge.php";

// Creem el model amb la connexió PDO
$model = new Habitatge($conexion);

$missatge = "";
$resultatCerca = null;

// Processem el formulari enviat
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $accio = $_POST["accio"] ?? "";

    try {
        switch ($accio) {

            // INSERIR
            case "insertar":
                $direccion = trim($_POST["direccion"] ?? "");
                $descripcio = trim($_POST["descripcio"] ?? "");
                $preu = ($_POST["preu"] ?? "") === ""
                    ? null
                    : (int) $_POST["preu"];
                $dni = strtoupper(trim($_POST["dni_propietari"] ?? ""));

                if ($direccion === "" || $descripcio === "" || $dni === "") {
                    throw new InvalidArgumentException(
                        "Omple tots els camps obligatoris."
                    );
                }

                $model->insertar(
                    $direccion,
                    $descripcio,
                    $preu,
                    $dni
                );

                $missatge = "Habitatge inserit correctament!";
                break;

            // MODIFICAR
            case "modificar":
                $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

                if (!$id || $id < 1) {
                    throw new InvalidArgumentException("ID no vàlid.");
                }

                $direccion = trim($_POST["direccion"] ?? "");
                $descripcio = trim($_POST["descripcio"] ?? "");
                $preu = ($_POST["preu"] ?? "") === ""
                    ? null
                    : (int) $_POST["preu"];
                $dni = strtoupper(trim($_POST["dni_propietari"] ?? ""));

                if ($direccion === "" || $descripcio === "" || $dni === "") {
                    throw new InvalidArgumentException(
                        "Omple tots els camps obligatoris."
                    );
                }

                $model->modificar(
                    $id,
                    $direccion,
                    $descripcio,
                    $preu,
                    $dni
                );

                $missatge = "Consulta d'actualització executada. Comprova les dades.";
                break;

            // ESBORRAR
            case "esborrar":
                $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

                if (!$id || $id < 1) {
                    throw new InvalidArgumentException("ID no vàlid.");
                }

                $model->esborrar($id);
                $missatge = "Consulta d'esborrat executada. Comprova si existia l'ID.";
                break;

            // CERCAR PER ID
            case "cercar":
                $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

                if (!$id || $id < 1) {
                    throw new InvalidArgumentException("ID no vàlid.");
                }

                $resultatCerca = $model->consultarPerId($id);

                $missatge = $resultatCerca
                    ? "Habitatge trobat."
                    : "No s'ha trobat cap habitatge amb aquest ID.";
                break;
        }

    } catch (InvalidArgumentException $e) {
        $missatge = $e->getMessage();

    } catch (PDOException $e) {
        // Missatge temporal per detectar errors SQL
        $missatge = "Error SQL: " . $e->getMessage();
    }
}

// Recuperem tots els habitatges per mostrar-los
try {
    $habitatges = $model->consultarTots();
} catch (PDOException $e) {
    error_log($e->getMessage());
    $habitatges = [];
    $missatge = "No s'han pogut carregar els habitatges.";
}

// Funció per mostrar text de forma segura en HTML
function escapar(mixed $valor): string
{
    return htmlspecialchars((string) ($valor ?? ""), ENT_QUOTES, "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió d'habitatges</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
            background: #f4f5f7;
            color: #222;
        }

        h1, h2 {
            color: #203b3b;
        }

        section {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            margin-top: 5px;
        }

        button {
            margin-top: 15px;
            padding: 10px 18px;
            background: #203b3b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #203b3b;
            color: white;
        }

        .missatge {
            background: #e3eee8;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .resultat {
            background: #fff8df;
            padding: 15px;
            border-radius: 6px;
        }

        .formularis {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }
    </style>
</head>

<body>

    <h1>Gestió d'habitatges</h1>

    <?php if ($missatge !== ""): ?>
        <div class="missatge">
            <?= escapar($missatge) ?>
        </div>
    <?php endif; ?>

    <div class="formularis">

        <!-- Formulari per inserir -->
        <section>
            <h2>Inserir habitatge</h2>

            <form method="POST">
                <input type="hidden" name="accio" value="insertar">

                <label>Direcció</label>
                <input type="text" name="direccion" maxlength="25" required>

                <label>Descripció</label>
                <input type="text" name="descripcio" maxlength="25" required>

                <label>Preu (€)</label>
                <input type="number" name="preu" min="0">

                <label>DNI del propietari</label>
                <input type="text" name="dni_propietari" maxlength="9" required>

                <button type="submit">Inserir</button>
            </form>
        </section>

        <!-- Formulari per modificar -->
        <section>
            <h2>Modificar habitatge</h2>

            <form method="POST">
                <input type="hidden" name="accio" value="modificar">

                <label>ID de l'habitatge</label>
                <input type="number" name="id" min="1" required>

                <label>Nova direcció</label>
                <input type="text" name="direccion" maxlength="25" required>

                <label>Nova descripció</label>
                <input type="text" name="descripcio" maxlength="25" required>

                <label>Nou preu (€)</label>
                <input type="number" name="preu" min="0">

                <label>DNI del propietari</label>
                <input type="text" name="dni_propietari" maxlength="9" required>

                <button type="submit">Modificar</button>
            </form>
        </section>

        <!-- Formulari per esborrar -->
        <section>
            <h2>Esborrar habitatge</h2>

            <form method="POST"
                  onsubmit="return confirm('Segur que vols esborrar aquest habitatge?');">

                <input type="hidden" name="accio" value="esborrar">

                <label>ID de l'habitatge</label>
                <input type="number" name="id" min="1" required>

                <button type="submit">Esborrar</button>
            </form>
        </section>

        <!-- Formulari per cercar -->
        <section>
            <h2>Cercar per ID</h2>

            <form method="POST">
                <input type="hidden" name="accio" value="cercar">

                <label>ID de l'habitatge</label>
                <input type="number" name="id" min="1" required>

                <button type="submit">Cercar</button>
            </form>
        </section>

    </div>

    <!-- Resultat de la cerca -->
    <?php if ($resultatCerca !== null && $resultatCerca !== false): ?>
        <section class="resultat">
            <h2>Resultat de la cerca</h2>

            <p><strong>ID:</strong> <?= escapar($resultatCerca["id"]) ?></p>
            <p><strong>Direcció:</strong> <?= escapar($resultatCerca["direccion"]) ?></p>
            <p><strong>Descripció:</strong> <?= escapar($resultatCerca["descripcio"]) ?></p>
            <p><strong>Preu:</strong> <?= escapar($resultatCerca["preu"]) ?> €</p>
            <p><strong>DNI propietari:</strong> <?= escapar($resultatCerca["dni_propietari"]) ?></p>
        </section>
    <?php endif; ?>

    <!-- Llistat de tots els habitatges -->
    <section>
        <h2>Tots els habitatges</h2>

        <?php if (count($habitatges) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Direcció</th>
                        <th>Descripció</th>
                        <th>Preu</th>
                        <th>DNI propietari</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($habitatges as $habitatge): ?>
                        <tr>
                            <td><?= escapar($habitatge["id"]) ?></td>
                            <td><?= escapar($habitatge["direccion"]) ?></td>
                            <td><?= escapar($habitatge["descripcio"]) ?></td>
                            <td><?= escapar($habitatge["preu"]) ?> €</td>
                            <td><?= escapar($habitatge["dni_propietari"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hi ha habitatges registrats.</p>
        <?php endif; ?>
    </section>

</body>
</html>
