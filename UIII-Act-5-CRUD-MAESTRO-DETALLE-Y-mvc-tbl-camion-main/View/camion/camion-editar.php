<h1 class="page-header">
    <?php echo $camion->id != null ? $camion->marca : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
    <li><a href="?c=camion">Camiones</a></li>
    <li class="active"><?php echo $camion->id != null ? $camion->marca : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-camion" action="?c=camion&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $camion->id; ?>" />

    <div class="form-group">
        <label>id</label>
        <input type="text" name="id" value="<?php echo $camion->id; ?>" class="form-control" placeholder="Ingrese id camion" required />
    </div>

    <div class="form-group">
        <label>Marca</label>
        <input type="text" name="marca" value="<?php echo $camion->marca; ?>" class="form-control" placeholder="Ingrese marca camion" required />
    </div>

    <div class="form-group">
        <label>Modelo</label>
        <input type="number" name="modelo" value="<?php echo $camion->modelo; ?>" class="form-control" placeholder="Ingrese modelo camion" required />
    </div>

    <div class="form-group">
        <label>Capacidad</label>
        <input type="number" name="capacidad" value="<?php echo $camion->capacidad; ?>" class="form-control" placeholder="Ingrese capacidad camion" required />
    </div>

    <!-- Nuevos campos -->
    <div class="form-group">
        <label>Tipo de combustible</label>
        <input type="text" name="tipo_combustible" value="<?php echo $camion->tipo_combustible; ?>" class="form-control" placeholder="Ingrese tipo_combustible de camion" required />
    </div>

    <div class="form-group">
        <label>Fecha de fabricacion</label>
        <input type="date" name="fecha_fabricacion" value="<?php echo $camion->fecha_fabricacion; ?>" class="form-control" placeholder="Ingrese fecha_fabricacion del camion" required />
    </div>

    <div class="form-group">
        <label>Numero de asientos</label>
        <input type="number" name="num_asientos" value="<?php echo $camion->num_asientos; ?>" class="form-control" placeholder="Ingrese num_asientos del camion" required />
    </div>

    <div class="form-group">
        <label>Disponibilidad</label>
        <input type="number" name="disponibilidad" value="<?php echo $camion->disponibilidad; ?>" class="form-control" placeholder="Ingrese disponibilidad del camion" required />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-camion").submit(function(){
            return $(this).validate();
        });
    })
</script>
