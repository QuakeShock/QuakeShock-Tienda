<div class="conten-general">
    <h1 class="titulo"> Usuarios</h1>    
<div class="conten-usuarios">
        <?php
         ?>
        <table class="usuarios">
            <thead>
            <tr>
                <th>ID</th>
                <th>RUT</th>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>CORREO</th>
                <th>TELEFONO</th>
                <th>TIPO</th>
            </tr>
            </thead>
            <tbody>
            <?php
            
            while ($usu = $usuarios->fetch_object()): ?>
                <tr>
                    <td><?= $usu->ID_USUARIO; ?></td>
                    <td><?= $usu->RUT; ?></td>
                    <td><?= $usu->NOMBRE; ?></td>
                    <td><?= $usu->APELLIDOS; ?></td>
                    <td><?= $usu->CORREO; ?></td>
                    <td><?= $usu->TELEFONO; ?></td>
                    <td><?= $usu->TIPO; ?></td>
                </tr>
            <?php 
            endwhile;
            
             ?>
            </tbody>    
        </table>
    </div>
</div>