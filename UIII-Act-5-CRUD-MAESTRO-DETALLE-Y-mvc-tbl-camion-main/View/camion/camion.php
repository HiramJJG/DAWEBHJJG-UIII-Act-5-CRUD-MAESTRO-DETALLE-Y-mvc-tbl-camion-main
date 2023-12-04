<h1 class="page-header">Camiones </h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=conductor&a=Nuevo">Nuevo Conductor</a>
    <a class="btn btn-primary" href="?c=camion&a=Nuevo">Nuevo Camion</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:120px;">id</th>
            <th style="width:120px;">Marca</th>
            <th style="width:120px;">Modelo</th>
            <th style="width:120px;">Capacidad</th>
            <th style="width:120px;">Tipo de combustible</th>
            <th style="width:120px;">Fecha de fabricacion</th>
            <th style="width:120px;">Numero de asientos</th>
            <th style="width:120px;">Disponibilidad</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->marca; ?></td>
            <td><?php echo $r->modelo; ?></td>
            <td><?php echo $r->capacidad; ?></td>
            <td><?php echo $r->tipo_combustible; ?></td>
            <td><?php echo $r->fecha_fabricacion; ?></td>
            <td><?php echo $r->num_asientos; ?></td>
            <td><?php echo $r->disponibilidad; ?></td>
            <td>
                <a href="?c=camion&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=camion&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
