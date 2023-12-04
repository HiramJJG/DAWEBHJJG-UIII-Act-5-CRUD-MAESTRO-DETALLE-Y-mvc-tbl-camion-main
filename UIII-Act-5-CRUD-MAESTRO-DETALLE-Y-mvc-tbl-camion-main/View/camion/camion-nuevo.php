<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
    <li><a href="?c=camion">Camion</a></li>
    <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-camion" action="?c=camion&a=Guardar" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>id</label>
        <input type="text" name="id" class="form-control" placeholder="Ingrese id camion" required />
    </div>

    <div class="form-group">
        <label>Marca</label>
        <input type="text" name="marca" class="form-control" placeholder="Ingrese la marca del camion" required />
    </div>

    <div class="form-group">
        <label>Modelo</label>
        <input type="text" name="modelo" class="form-control" placeholder="Ingrese el modelo del camion" required />
    </div>

    <div class="form-group">
        <label>Capacidad</label>
        <input type="number" name="capacidad" class="form-control" placeholder="Ingrese la capacidad del camion" required />
    </div>

    <!-- Nuevos campos -->
    <div class="form-group">
        <label>Tipo de combustible</label>
        <input type="text" name="tipo_combustible" class="form-control" placeholder="Ingrese el tipo_combustible del camion" required />
    </div>

    <div class="form-group">
        <label>Fecha de fabricacion</label>
        <input type="date" name="fecha_fabricacion" class="form-control" placeholder="Ingrese fecha_fabricacion del camion" required />
    </div>

    <div class="form-group">
        <label>Numero de asientos</label>
        <input type="number" name="num_asientos" class="form-control" placeholder="Ingrese num_asientos del camion" required />
    </div>

    <div class="form-group">
        <label>Disponibilidad</label>
        <input type="number" name="disponibilidad" class="form-control" placeholder="Ingrese la disponibilidad del camion" required />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-camion").submit(function(){
            return $(this).validate();
        });
    })
</script>
