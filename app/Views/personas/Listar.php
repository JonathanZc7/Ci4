<?=$cabecera?>

<a href="<?=base_url()?>"><center>Nuevo registro</center></a>
        <div class="container">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Persona as $persona): ?>
                    <tr>
                        <td><?= $persona['Id'] ?></td>
                        <td><?= $persona['Cedula'] ?></td>
                        <td><?= $persona['Nombres'] ?></td>
                        <td><?= $persona['Correo'] ?></td>
                        <td>
  
    <a href="<?= base_url('editar/'.$persona['Id']) ?>">Editar</a>
    <a href="<?= base_url('eliminar/'.$persona['Id']) ?>">Eliminar</a>

  
</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>

  <?=$piepagina?>