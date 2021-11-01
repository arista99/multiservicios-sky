<!-- HEADER -->
<?php require_once 'includes/header.php'; ?>

<section id="contact">
    <div class="container">
        <div class="content-center">
            <h2>CONTACTANOS</h2>
        </div>
        <div class="row">
            <div class="texto">
                <h4>LLámanos</h4>
                <p>+51 986 892 089</p>
                <h4>Correo Electrónico</h4>
                <p>skyventas@multiserviciossky.com</p>
            </div>
            <div class="texto">
                <form action="enviar.php" method="POST">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
        
                    <input type="email" class="form-control" name="correo" placeholder="Correo Electronico" required>
                
                    <input type="text" class="form-control" name="numero" placeholder="Número de Teléfono" required>
            
                    <textarea name="comentario"  placeholder="Dejanos algun comentario" required></textarea>
            
                    <input class="btn btn-primary full-width" type="submit" value="ENVIAR">
                </form>
            </div>
        </div>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11034.882743400554!2d-76.9273042396763!3d-12.083359333057125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c70efe0f26a5%3A0xcb2c6d6152ed54d7!2sMultiservicios%20Sky%20s.a.c!5e0!3m2!1ses-419!2spe!4v1601339795678!5m2!1ses-419!2spe" width="1109" height="575" frameborder="0" style="padding-top: 0px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php require_once 'includes/footer.php'; ?>