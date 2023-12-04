<?php
require_once 'model/producto.php';

class ProductoController {

    private $model;

    public function __CONSTRUCT() {
        $this->model = new Producto();
    }

    public function Index() {
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }

    public function Crud() {
        $prod = new Producto();

        if (isset($_REQUEST['idProducto'])) {
            $prod = $this->model->Obtener($_REQUEST['idProducto']);
        }

        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo() {
        $prod = new Producto();

        require_once 'view/header.php';
        require_once 'view/producto/producto-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar() {
        $prod = new Producto();

        $prod->idProducto = $_REQUEST['idProducto'];
        $prod->nit = $_REQUEST['nit'];
        $prod->nomprod = $_REQUEST['nomprod'];
        $prod->precioU = $_REQUEST['precioU'];
        $prod->descrip = $_REQUEST['descrip'];
        $prod->stockd = $_REQUEST['stockd']; // Nuevo campo
        $prod->unidadm = $_REQUEST['unidadm']; // Nuevo campo
        $prod->fechai = $_REQUEST['fechai']; // Nuevo campo
        $prod->marca = $_REQUEST['marca']; // Nuevo campo

        $this->model->Registrar($prod);

        header('Location: index.php?c=producto');
    }

    public function Editar() {
        $prod = new Producto();

        $prod->idProducto = $_REQUEST['idProducto'];
        $prod->nit = $_REQUEST['nit'];
        $prod->nomprod = $_REQUEST['nomprod'];
        $prod->precioU = $_REQUEST['precioU'];
        $prod->descrip = $_REQUEST['descrip'];
        $prod->stockd = $_REQUEST['stockd']; // Nuevo campo
        $prod->unidadm = $_REQUEST['unidadm']; // Nuevo campo
        $prod->fechai = $_REQUEST['fechai']; // Nuevo campo
        $prod->marca = $_REQUEST['marca']; // Nuevo campo

        $this->model->Actualizar($prod);

        header('Location: index.php?c=producto');
    }

    public function Eliminar() {
        $this->model->Eliminar($_REQUEST['idProducto']);
        header('Location: index.php?c=producto');
    }
}
?>
