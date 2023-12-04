<?php
require_once 'model/conductor.php';

class ConductorController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Conductor();
    }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/conductor/conductor.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $conductor = new Conductor();

        if(isset($_REQUEST['id'])){
            $conductor = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/conductor/conductor-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $conductor = new Conductor();

        require_once 'view/header.php';
        require_once 'view/conductor/conductor-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar() {
        $conductor = new conductor();

        $conductor->id = $_REQUEST['id'];
        $conductor->nombre_completo = $_REQUEST['nombre_completo'];
        $conductor->fecha_naci = $_REQUEST['fecha_naci'];
        $conductor->lugar_destino = $_REQUEST['lugar_destino'];
        $conductor->num_camion = $_REQUEST['num_camion']; // Nuevo campo
        $conductor->horario_viaje = $_REQUEST['horario_viaje']; // Nuevo campo
        $conductor->licencia = $_REQUEST['licencia']; // Nuevo campo
        $conductor->curso_manejo = $_REQUEST['curso_manejo']; // Nuevo campo

        $this->model->Registrar($conductor);

        header('Location: index.php?c=conductor');
    }

    public function Editar() {
        $conductor = new conductor();

        $conductor->id = $_REQUEST['id'];
        $conductor->nombre_completo = $_REQUEST['nombre_completo'];
        $conductor->fecha_naci = $_REQUEST['fecha_naci'];
        $conductor->lugar_destino = $_REQUEST['lugar_destino'];
        $conductor->num_camion = $_REQUEST['num_camion']; // Nuevo campo
        $conductor->horario_viaje = $_REQUEST['horario_viaje']; // Nuevo campo
        $conductor->licencia = $_REQUEST['licencia']; // Nuevo campo
        $conductor->curso_manejo = $_REQUEST['curso_manejo']; // Nuevo campo

        $this->model->Actualizar($conductor);

        header('Location: index.php?c=conductor');
    }

    public function Eliminar() {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=conductor');
    }
}
?>
