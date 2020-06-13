
<?php
    $tituloPagina = 'Bienvenido';
    include 'includes/header.php';
?>

    <!-- Imagen de banner -->    
    <div class="container">
        <img src="img/galaxia2.jpg" alt="" class="img-fluid">
    </div>

    <!-- DESARROLLO PROYECTO -->
    <div class="container text-center">
        <h2 class="tituloSeccion my-5 py-4">Cómo desarrollamos nuestro proyecto</h2>
        <div class="row iconsDesarrolloProyecto">
            <div class="col-md-4">
                <i class="fas fa-users fa-3x"></i>
                <h3 class="subtituloSeccion">Trabajo colaborativo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam aliquid molestiae cum alias, excepturi perspiciatis ex ipsam officiis consequuntur voluptatum fuga dolores vero et expedita doloremque possimus pariatur delectus tempora dignissimos numquam quo.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-hand-holding-water fa-3x"></i>
                <h3 class="subtituloSeccion">¿Qué es la huella hídrica?</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam aliquid molestiae cum alias, excepturi perspiciatis ex ipsam officiis consequuntur voluptatum fuga dolores vero et expedita doloremque possimus pariatur delectus tempora dignissimos numquam quo.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-journal-whills fa-3x"></i>
                <h3 class="subtituloSeccion">Síntesis del proyecto</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam aliquid molestiae cum alias, excepturi perspiciatis ex ipsam officiis consequuntur voluptatum fuga dolores vero et expedita doloremque possimus pariatur delectus tempora dignissimos numquam quo.</p>
            </div>
        </div>
    </div>

    <!-- REGISTROS -->
    <div class="fluid registros py-3">
        <div class="container text-center">
            <div class="row justify-content-center">
                <h3 class="tituloSeccion mt-1 py-4">Registros de consumo hídrico</h3>
                <p class="mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur optio et ea ducimus! Tempora magni repellat voluptates necessitatibus amet nam nisi quaerat, at placeat quo odio eius error possimus quae!</p>
                <div class="col-md-4">
                    <img src="img/alumnos/default.jpg" width="200" alt="Alumno" class="rounded-circle img-fluid">
                    <h3 class="tituloRegistrosIndex">nombre de estudiante</h3>
                </div>
                <div class="col-md-4">
                    <img src="img/alumnos/default.jpg" width="200" alt="Alumno" class="rounded-circle img-fluid">
                    <h3 class="tituloRegistrosIndex">nombre de estudiante</h3>
                </div>
                <div class="col-md-4">
                    <img src="img/alumnos/default.jpg" width="200" alt="Alumno" class="rounded-circle img-fluid">
                    <h3 class="tituloRegistrosIndex">nombre de estudiante</h3>
                </div>
            </div>
            <a href="estudiantes.php" class="btn btn-primary text-uppercase mt-4 mb-3">Ver todos los registros</a>
        </div>
    </div>

    <!-- FOOTER -->
    
    <?php 

      include 'includes/footer.php';
   
    ?>

</body>
</html>