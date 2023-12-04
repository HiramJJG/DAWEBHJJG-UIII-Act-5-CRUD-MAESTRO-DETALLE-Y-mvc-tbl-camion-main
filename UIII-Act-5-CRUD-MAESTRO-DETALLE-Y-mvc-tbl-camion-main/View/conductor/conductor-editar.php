<h1 class="page-header">
    <?php echo $conductor->id != null ? $conductor->nombre_completo : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
    <li><a href="?c=conductor">Conductores</a></li>
    <li class="active"><?php echo $conductor->id != null ? $conductor->nombre_completo : 'Nuevo Registro'; ?></li>
</ol>

<form id="form-conductor" action="?c=conductor&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $conductor->id; ?>" />

    <div class="form-group">
        <label>id</label>
        <input type="text" name="id" value="<?php echo $conductor->id ; ?>" class="form-control" placeholder="Ingrese id  del conductor" required />
    </div>

    <div class="form-group">
        <label>Nombre completo</label>
        <input type="text" name="nombre_completo" value="<?php echo $conductor->nombre_completo; ?>" class="form-control" placeholder="Ingrese nombre_completom del conductor" required />
    </div>

    <div class="frm-group">
        <label>Fecha de nacimiento</label>
        <input type="date" name="fecha_naci" value="<?php echo $conductor->fecha_naci; ?>" class="form-control" placeholder="Ingrese fecha_naci del conductor" required />
    </div>

    <div class="form-group">
        <label>Lugar de destino</label>
        <input type="text" name="lugar_destino" value="<?php echo $conductor->lugar_destino; ?>" class="form-control" placeholder="Ingrese lugar_destino de conductor" required />
    </div>

    <div class="form-group">
        <label>Numero de camion</label>
        <input type="number" name="num_camion" value="<?php echo $conductor->num_camion; ?>" class="form-control" placeholder="Ingrese num_camion del conductor" required />
    </div>

    <div class="form-group">
        <label>Horario de viaje</label>
        <input type="time" name="horario_viaje" value="<?php echo $conductor->horario_viaje; ?>" class="form-control" placeholder="Ingrese horario_viaje de conductor" required />
    </div>

    <div class="form-group">
        <label>Licencia</label>
        <input type="text" name="licencia" value="<?php echo $conductor->licencia; ?>" class="form-control" placeholder="Ingrese licencia del conductor" required />
    </div>

    <div class="form-group">
        <label>Curso de manejo</label>
        <input type="text" name="curso_manejo" value="<?php echo $conductor->curso_manejo; ?>" class="form-control" placeholder="Ingrese curso_manejo del conductor" required />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-conductor").submit(function(){
            return $(this).validate();
        });
    })
</script>
