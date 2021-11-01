<?php require_once 'helpers/db.php'; ?>
<?php require_once 'helpers/utils.php'; ?>

    <?php
            $categoria_actual = conseguirCategoria($db, $_GET['id']);
            if (!isset($categoria_actual['id'])) {
                header("Location: productos.php?id=1");
            }
    ?>

<?php require_once 'includes/header.php';?>
    <section id="detalle-productos">
        <div id="menu_secundario">
            <ul>
                <?php 
                    $categorias = conseguirCategorias($db);
                    if (!empty($categorias)) :
                    while($categoria = mysqli_fetch_assoc($categorias)): ?>
                    <li>    
                        <a id="categorias-pro" href="productos.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        
        <div class="nombre-pro">
            <h2><?=$categoria_actual['nombre']?></h2>
        </div>

        <div>
            <?php 
                $productos = conseguirProductos($db, $_GET['id']);
                if (!empty($productos) && mysqli_num_rows($productos) >=1):
                    while($producto = mysqli_fetch_assoc($productos)):
            ?>
                    <div class="product-venta">
                        <img src="uploads/images/<?=$producto['imagen']?>" />
                        <h2 class="titulo-pro"><?=$producto['nombre']?></h2>
                        <h2 class="marca-pro"><?=$producto['marcas']?></h2>
                        <?php if ($producto['desc_bateria_id'] != null): ?>
                            <a href="ver.php?id=<?=$producto['id']?>" class="button">Detalle</a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

<!-- FOOTER -->
<?php require_once 'includes/footer.php'; ?>