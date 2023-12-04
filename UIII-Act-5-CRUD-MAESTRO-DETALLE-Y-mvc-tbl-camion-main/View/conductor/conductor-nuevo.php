<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
    <li><a href="?c=conductor">Conductores</a></li>
    <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-conductor" action="?c=conductor&a=Guardar" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>id</label>
        <input type="text" name="id" class="form-control" placeholder="Ingrese id del conductor" required />
    </div>

    <div class="form-group">
        <label>Nombre completo</label>
        <input type="text" name="nombre_completo" class="form-control" placeholder="Ingrese nombre_completo del conductor" required />
    </div>

    <div class="form-group">
        <label>Fecha de nacimiento</label>
        <input type="date" name="fecha_naci" class="form-control" placeholder="Ingrese fecha_naci del conductor" required />
    </div>

    <div class="form-group">
        <label>Lugar de destino</label>
        <input type="text" name="lugar_destino" class="form-control" placeholder="Ingrese lugar_destino del conductor" required />
    </div>

    <div class="form-group">
        <label>Numero de camion</label>
        <input type="number" name="num_camion" class="form-control" placeholder="Ingrese num_camion del conductor" required />
    </div>

    <div class="form-group">
        <label>Hoario de viaje</label>
        <input type="time" name="horario_viaje" class="form-control" placeholder="Ingrese horario_viaje del conductor" required />
    </div>

    <div class="form-group">
        <label>Licencia</label>
        <input type="text" name="licencia" class="form-control" placeholder="Ingrese licencia del conductor" required />
    </div>

    <div class="form-group">
        <label>Curso de manejo</label>
        <input type="text" name="curso_manejo" class="form-control" placeholder="Ingrese curso_manejo del conductor" required />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-conductor").submit(function(){
            return $(this).validate();
        });
    })
</script>
