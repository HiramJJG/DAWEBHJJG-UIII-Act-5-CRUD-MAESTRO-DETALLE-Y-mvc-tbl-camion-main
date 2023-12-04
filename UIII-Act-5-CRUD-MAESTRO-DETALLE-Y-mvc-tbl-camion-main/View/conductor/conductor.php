<h1 class="page-header">Conductores</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=conductor&a=Nuevo">Nuevo Conductor</a>
    <a class="btn btn-primary" href="?c=camion&a=Nuevo">Nuevo Camion</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">id</th>
            <th style="width:120px;">Nombre completo </th>
            <th style="width:120px;">Fecha de nacimiento</th>
            <th style="width:120px;">Lugar de destino</th>
            <th style="width:180px;">Numero de camion</th>
            <th style="width:120px;">Horario de viaje</th>
            <th style="width:120px;">Licencia</th>
            <th style="width:120px;">Curso de manejo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->nombre_completo; ?></td>
            <td><?php echo $r->fecha_naci; ?></td>
            <td><?php echo $r->lugar_destino; ?></td>
            <td><?php echo $r->num_camion; ?></td>
            <td><?php echo $r->horario_viaje; ?></td>
            <td><?php echo $r->licencia; ?></td>
            <td><?php echo $r->curso_manejo; ?></td>
            <td>
                <a href="?c=conductor&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=conductor&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
