<h1 class="titulo"> Productos</h1>    
<div class="conten-usuarios">
        <?php
         ?>
        <table class="usuarios">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>ID CATEGORIA</th>
                <th>CATEGORIA</th>
                <th>PRECIO</th>
                <th>STOCK</th>
                <th>GESTIÓN</th>
            </tr>
            </thead>
            <tbody>
            <?php
            
            while ($prod = $productos->fetch_object()): ?>
                <tr>
                    <td><?= $prod->ID_PRODUCTO; ?></td>
                    <td><a style="font-weight: bold; color: #018059;" href="<?=base_url.'producto/detalle&id='.$prod->ID_PRODUCTO;?>"><?= $prod->NOMBRE; ?></a></td>
                    <td><?= $prod->Categoria_ID_CATEGORIA; ?></td>
                    <td><?= utils::getCategoria($prod->Categoria_ID_CATEGORIA); ?></td>
                    <td><?= $prod->PRECIO; ?></td>
                    <td><?= $prod->STOCK; ?></td>
                    <td>
                        <a href="<?=base_url?>producto/modificar&id=<?=$prod->ID_PRODUCTO?>" class="btn gestion-tabla" >Modificar</a>
                        <a href="<?=base_url?>producto/eliminar&id=<?=$prod->ID_PRODUCTO?>" class="btn gestion-tabla roja" >Eliminar</a>
                    </td>
                </tr>
            <?php 
            endwhile;
            
             ?>
            </tbody>    
        </table>
    </div>
