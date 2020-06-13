<?php 
   $tituloPagina = 'Detalle estudiante';
   include 'includes/header.php';
?>

    <!-- SECCION DETALLE ESTUDIANTE -->
   <div class="container mt-3">
      <div class="row justify-content-center">
         <!-- Primer Card -->
         <div class="col-md-12 mb-4">
            <div class="card text-center">
               <div class="card-body">
                  <img src="img/alumnos/default.jpg" class="rounded-circle img-fluid mt-3" width="230">
                  <h5 class="card-title">Julio César Martínez Contreras</h5>
                  <div class="card-text">
                     <!-- Tablas de datos -->
                  <p>Consumo hídrico acumulado por día en la ducha</p>
                  <table class="table table-responsive-md mt-4 mb-4">
                     <thead>
                     <tr>
                        <th scope="col">Lunes</th>
                        <th scope="col">Martes</th>
                        <th scope="col">Miércoles</th>
                        <th scope="col">Jueves</th>
                        <th scope="col">Viernes</th>
                        <th scope="col">Sábado</th>
                        <th scope="col">Domingo</th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                        <td>12.32</td>
                        <td>12.22</td>
                        <td>12.45</td>
                        <td>12.35</td>
                        <td>12.35</td>
                        <td>12.23</td>
                        <td>12.20</td>
                     </tr>
                     </tbody>
                  </table>

                  <p>Consumo hídrico acumulado por día en excusado</p>
                  <table class="table table-responsive-md mt-4">
                     <thead>
                     <tr>
                        <th scope="col">Lunes</th>
                        <th scope="col">Martes</th>
                        <th scope="col">Miércoles</th>
                        <th scope="col">Jueves</th>
                        <th scope="col">Viernes</th>
                        <th scope="col">Sábado</th>
                        <th scope="col">Domingo</th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                        <td>12.32</td>
                        <td>12.22</td>
                        <td>12.45</td>
                        <td>12.35</td>
                        <td>12.35</td>
                        <td>12.23</td>
                        <td>12.20</td>
                     </tr>
                     </tbody>
                  </table>
                  <!-- Fin tabla de datos -->
                     <div class="row justify-content-center my-4">
                        <div class="col-md-5 baño rounded">
                           <p>Consumo total en la ducha</p>
                           <span>200.34</span>
                        </div>
                        <div class="col-md-5 excusado offset-md-1 rounded">
                           <p>Consumo total en el excusado</p>
                           <span>150.67</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Fin del primer card -->
      </div>
   </div>

    <!-- FOOTER -->
    <?php 

   include 'includes/footer.php';

   ?>

</body>
</html>
