<?php
require_once 'model/camion.php';

class CamionController {

    private $model;

    public function __CONSTRUCT() {
        $this->model = new Camion();
    }

    public function Index() {
        require_once 'view/header.php';
        require_once 'view/camion/camion.php';
        require_once 'view/footer.php';
    }

    public function Crud() {
        $camion = new Camion();

        if (isset($_REQUEST['id'])) {
            $camion = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/camion/camion-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo() {
        $camion = new Camion();

        require_once 'view/header.php';
        require_once 'view/camion/camion-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar() {
        $camion = new Camion();

        $camion->id = $_REQUEST['id'];
        $camion->marca = $_REQUEST['marca'];
        $camion->modelo = $_REQUEST['modelo'];
        $camion->capacidad = $_REQUEST['capacidad'];
        $camion->tipo_combustible = $_REQUEST['tipo_combustible']; // Nuevo campo
        $camion->fecha_fabricacion = $_REQUEST['fecha_fabricacion']; // Nuevo campo
        $camion->num_asientos = $_REQUEST['num_asientos']; // Nuevo campo
        $camion->disponibilidad = $_REQUEST['disponibilidad']; // Nuevo campo

        $this->model->Registrar($camion);

        header('Location: index.php?c=camion');
    }

    public function Editar() {
        $camion = new Camion();

        $camion->id = $_REQUEST['id'];
        $camion->marca = $_REQUEST['marca'];
        $camion->modelo = $_REQUEST['modelo'];
        $camion->capacidad = $_REQUEST['capacidad'];
        $camion->tipo_combustible = $_REQUEST['tipo_combustible']; // Nuevo campo
        $camion->fecha_fabricacion = $_REQUEST['fecha_fabricacion']; // Nuevo campo
        $camion->num_asientos = $_REQUEST['num_asientos']; // Nuevo campo
        $camion->disponibilidad = $_REQUEST['disponibilidad']; // Nuevo campo

        $this->model->Actualizar($camion);

        header('Location: index.php?c=camion');
    }

    public function Eliminar() {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=camion');
    }
}
?>
