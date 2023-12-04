<?php
class Conductor
{
    private $conductor;

    public $id;
    public $nombre_completo;
    public $fecha_naci;
    public $lugar_destino;
    public $num_camion;
    public $horario_viaje;
    public $licencia;
    public $curso_manejo;

    public function __construct()
    {
        try
        {
            $this->conductor = Database::Conectar();
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
            $stm = $this->conductor->prepare("SELECT * FROM conductor");
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
            $stm = $this->conductor->prepare("SELECT * FROM conductor WHERE id = ?");
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
            $stm = $this->conductor->prepare("DELETE FROM conductor WHERE id = ?");
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
            $sql = "UPDATE conductor SET
			            id = ?,
                        nombre_completo = ?,
                        fecha_naci = ?,
                        lugar_destino = ?,
                        num_camion = ?,
                        horario_viaje = ?,
                        licencia = ?,
                        curso_manejo = ?
                    WHERE id = ?";

            $this->conductor->prepare($sql)->execute(
                array(
				    $data->id,
                    $data->nombre_completo,
                    $data->fecha_naci,
                    $data->lugar_destino,
                    $data->num_camion,
                    $data->horario_viaje,
                    $data->licencia,
                    $data->curso_manejo,
                    $data->id
                )
            );
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Conductor $data)
    {
        try
        {
            $sql = "INSERT INTO conductor (id, nombre_completo, fecha_naci, lugar_destino, num_camion, horario_viaje, licencia, curso_manejo)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $this->conductor->prepare($sql)->execute(
                array(
                    $data->id,
                    $data->nombre_completo,
                    $data->fecha_naci,
                    $data->lugar_destino,
                    $data->num_camion,
                    $data->horario_viaje,
                    $data->licencia,
                    $data->curso_manejo
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
