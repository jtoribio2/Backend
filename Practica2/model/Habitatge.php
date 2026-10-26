
<?php
/**
 * Model Habitatge
 *
 * Gestiona les operacions CRUD dels habitatges
 * mitjançant PDO i Prepared Statements.
 */
class Habitatge
{
    // Connexió amb la base de dades
    private PDO $conexion;

    /**
     * Constructor de la classe.
     * Rep la connexió PDO des de fora.
     */
    public function __construct(PDO $conexion)
    {
        $this->conexion = $conexion;
    }

    /**
     * Insereix un habitatge a la base de dades.
     */
    public function insertar(
        string $direccion,
        string $descripcio,
        ?int $preu,
        string $dni_propietari
    ): bool {
        $sql = "INSERT INTO habitatges
                (direccion, descripcio, preu, dni_propietari)
                VALUES (:direccion, :descripcio, :preu, :dni_propietari)";

        $consulta = $this->conexion->prepare($sql);

        return $consulta->execute([
            "direccion" => $direccion,
            "descripcio" => $descripcio,
            "preu" => $preu,
            "dni_propietari" => $dni_propietari
        ]);
    }

    /**
     * Retorna tots els habitatges.
     */
    public function consultarTots(): array
    {
        $sql = "SELECT * FROM habitatges ORDER BY id DESC";

        $consulta = $this->conexion->prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll();
    }

    /**
     * Cerca un habitatge pel seu ID.
     */
    public function consultarPerId(int $id): array|false
    {
        $sql = "SELECT * FROM habitatges WHERE id = :id";

        $consulta = $this->conexion->prepare($sql);
        $consulta->execute([
            "id" => $id
        ]);

        return $consulta->fetch();
    }

    /**
     * Modifica les dades d'un habitatge existent.
     */
    public function modificar(
        int $id,
        string $direccion,
        string $descripcio,
        ?int $preu,
        string $dni_propietari
    ): bool {
        $sql = "UPDATE habitatges
                SET direccion = :direccion,
                    descripcio = :descripcio,
                    preu = :preu,
                    dni_propietari = :dni_propietari
                WHERE id = :id";

        $consulta = $this->conexion->prepare($sql);

        return $consulta->execute([
            "id" => $id,
            "direccion" => $direccion,
            "descripcio" => $descripcio,
            "preu" => $preu,
            "dni_propietari" => $dni_propietari
        ]);
    }

    /**
     * Esborra un habitatge pel seu ID.
     */
    public function esborrar(int $id): bool
    {
        $sql = "DELETE FROM habitatges WHERE id = :id";

        $consulta = $this->conexion->prepare($sql);
        $consulta->execute([
            "id" => $id
        ]);

        return $consulta->rowCount() > 0;
    }

    /**
     * Cerca habitatges pel DNI del propietari.
     */
    public function consultarPerDni(string $dni): array
    {
        $sql = "SELECT * FROM habitatges
                WHERE dni_propietari = :dni
                ORDER BY id DESC";

        $consulta = $this->conexion->prepare($sql);
        $consulta->execute([
            "dni" => $dni
        ]);

        return $consulta->fetchAll();
    }
}
