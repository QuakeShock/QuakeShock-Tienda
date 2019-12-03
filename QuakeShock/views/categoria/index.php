<div id="conten-general">
    <h1 id="titulo"> Categorias </h1>
    <div id="conten-categorias">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
            </tr>
            <?php while ($cat = $categorias->fetch_object()): ?>
                <tr>
                    <td><?= $cat->ID_CATEGORIA; ?></td>
                    <td><?= $cat->NOMBRE; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</div>
