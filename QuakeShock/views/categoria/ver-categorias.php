<div class="conten-general">
    <h1 class="titulo"> Categorias</h1>    
<div class="conten-bg">
        <?php
         ?>
        <table class="usuarios categorias">
            <thead>
            <tr>
                <th>IMAGEN</th>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>IMAGEN_NOMBRE</th>
                <th>GESTIÒN</th>
            </tr>
            </thead>
            <tbody>
            <?php
            
            while ($cat = $categorias->fetch_object()):
                if($cat->Imagen == null){
                  $imagen = base_url . 'uploads/images/default.jpg';  
                }else{
                    $imagen = base_url . 'uploads/images/'.$cat->Imagen;
                }
?>
                <tr>
                    <td><img src="<?=$imagen?>" style="width: 40px ; height: 40px; border: 1px solid black;" onclick="window.open('<?=$imagen?>')"></td>
                    <td><?= $cat->ID_CATEGORIA; ?></td>
                    <td><?= $cat->NOMBRE; ?></td>
                    <td><?= $cat->Imagen; ?></td>
                    <td>
                        <a href="<?=base_url?>categoria/eliminar&id=<?=$cat->ID_CATEGORIA?>" class="btn gestion-tabla roja" >Eliminar</a>
                    </td>
                </tr>
            <?php 
            endwhile;
            
             ?>
            </tbody>    
        </table>
    </div>
</div>