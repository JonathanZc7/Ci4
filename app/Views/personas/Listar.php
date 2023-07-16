<!DOCTYPE html>
<html>
    <head>
        <title>Tarea Jonathan Zambrano</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
        <h1>Lista de Personas</h1>
       
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
