<?=$cabecera?>

<a href="<?=base_url()?>">Nuevo registro</a>
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
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>

  <?=$piepagina?>