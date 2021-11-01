<?php require_once 'helpers/db.php'; ?>
<?php require_once 'helpers/utils.php'; ?>

    <?php
            $produc_actual = conseguirBaterias($db, $_GET['id']);
            if (!isset($produc_actual['id'])) {
                header("Location: productos.php");
            }
    ?>

<!-- HEADER -->
<?php require_once 'includes/header.php'; ?>
<section id="informacion">
    <div class="wrap">
        <h2>Detalles tecnicos del Producto - <?=$produc_actual['nombre']?></h2>

        <div id="pro">
            <img src="uploads/images/<?=$produc_actual['imagen']?>" />
        </div>

        <div id="tec">
            <h3>Características Tecnícas</h3>
            <li>Voltios: <?=$produc_actual['voltios']?></li>
            <li>Amperios(Ah): <?=$produc_actual['amperios']?></li>
            <li>Potencia Arranque(A): <?=$produc_actual['potencia']?></li>
            <li>Número de Placas: <?=$produc_actual['numero']?></li>
            <li>Polaridad: <?=$produc_actual['polaridad']?></li>
            <li>RC: <?=$produc_actual['rcs']?></li>
            <li>Medida (largo x ancho x alto): <?=$produc_actual['medida']?></li>
            <li>Peso: <?=$produc_actual['peso']?></li>
            
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php require_once 'includes/footer.php'; ?>