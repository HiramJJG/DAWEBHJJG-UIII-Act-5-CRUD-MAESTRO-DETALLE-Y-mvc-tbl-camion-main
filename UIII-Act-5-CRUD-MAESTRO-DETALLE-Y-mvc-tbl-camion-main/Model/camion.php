<?php
class Camion
{
    private $camion;

    public $id;
    public $marca;
    public $modelo;
    public $capacidad;
    public $tipo_combustible;
    public $fecha_fabricacion;
    public $num_asientos;
    public $disponibilidad;
    

    public function __construct()
    {
        try
        {
            $this->camion = Database::Conectar();
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();
            $stm = $this->camion->prepare("SELECT * FROM camion");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try
        {
            $stm = $this->camion->prepare("SELECT * FROM camion WHERE id = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try
        {
            $stm = $this->camion->prepare("DELETE FROM camion WHERE id = ?");
            $stm->execute(array($id));
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try
        {
            $sql = "UPDATE camion SET
                        id = ?,
                        marca = ?,
                        modelo = ?,
                        capacidad = ?,
                        tipo_combustible = ?,
                        fecha_fabricacion = ?,
                        num_asientos = ?,
                        disponibilidad = ?
                    WHERE id = ?";

            $this->camion->prepare($sql)->execute(
                array(
                    $data->id,
                    $data->marca,
                    $data->modelo,
                    $data->capacidad,
                    $data->tipo_combustible,
                    $data->fecha_fabricacion,
                    $data->num_asientos,
                    $data->disponibilidad,
                    $data->id
                )
            );
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Camion $data)
    {
        try
        {
            $sql = "INSERT INTO camion (id, marca, modelo, capacidad, tipo_combustible, fecha_fabricacion, num_asientos, disponibilidad)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $this->camion->prepare($sql)->execute(
                array(
                    $data->id,
                    $data->marca,
                    $data->modelo,
                    $data->capacidad,
                    $data->tipo_combustible,
                    $data->fecha_fabricacion,
                    $data->num_asientos,
                    $data->disponibilidad
                )
            );
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}
?>
