
<?php
  $titulo = 'Inicio';
  include 'templates/header.php';
  include 'templates/navegacion.php';
  include 'inc/funciones.php';
?>
    <div class="container">
      <div id="sliderPrincipal" class="carousel slide mt-4" data-ride="carousel">
          <!--Indicador inferior del SLIDE-->
        <ol class="carousel-indicators">
          <li data-target="#sliderPrincipal" data-slide-to="0" class="active"></li>
          <li data-target="#sliderPrincipal" data-slide-to="1"></li>
          <li data-target="#sliderPrincipal" data-slide-to="2"></li>
        </ol>
          <!--CONTENEDOR SLIDE-->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="img/slide_01.jpg" alt="Instalaciones">
            <div class="carousel-caption">
              <h3 class="text-uppercase">Nuevas Instalaciones</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide_02.jpg" alt="Servicios">
            <div class="carousel-caption">
              <h3 class="text-uppercase">Conoce nuestro servicios</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide_03.jpg" alt="Promoción">
            <div class="carousel-caption">
              <h3 class="text-uppercase">2x1 en todos los servicios</h3>
            </div>
          </div> <!--Carousel ITEM -->
        </div> <!--Carousel INNER-->
         <!--Control del Slide con botones next y prev-->
        <a href="#sliderPrincipal" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a href="#sliderPrincipal" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div><!--Carousel SLIDE PRINCIPAL-->
    </div>
    <!-- Mensaje de BIENVENIDA -->
    <section class="nuevo-sitio">
      <h2 class="text-center text-uppercase mt-4 encabezado">
        <span class="text-lowercase d-block">Bienvenido a nuestro</span> sitio web
      </h2>
      <p class="text-center mt-4">Te sentirás como nuevo(a) con nuestros masajistas profesionales</p>
    </section>
    <!-- TARJETA DE SERVICIOS  -->
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <div class="imagen-servicio">
            <img src="img/servicio_01.jpg" alt="" class="img-fluid">
            <div class="row no-gutters justify-content-center">
              <div class="col-8 col-md-10 pt-4 servicio-info">
                <h3 class="text-center text-uppercase encabezado">
                  <span class="text-lowercase d-block">Conoce sobre</span> nosotros
                </h3>
                <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
              </div>
            </div>
          </div> <!-- Cierre imagen - servicios -->
        </div> <!--Cierre Col-md4 -->
        <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
              <img src="img/servicio_02.jpg" alt="" class="img-fluid">
              <div class="row no-gutters justify-content-center">
                <div class="col-8 col-md-10 pt-4 servicio-info">
                  <h3 class="text-center text-uppercase encabezado">
                    <span class="text-lowercase d-block">Nuestros</span> servicios
                  </h3>
                  <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                </div>
              </div>
            </div> <!-- Cierre imagen - servicios -->
          </div> <!--Cierre Col-md4 -->
        <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
              <img src="img/servicio_03.jpg" alt="" class="img-fluid">
              <div class="row no-gutters justify-content-center">
                <div class="col-8 col-md-10 pt-4 servicio-info">
                  <h3 class="text-center text-uppercase encabezado">
                    <span class="text-lowercase d-block">Visita nuestra</span> tienda
                  </h3>
                  <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
               </div>
             </div>
           </div> <!-- Cierre imagen - servicios -->
        </div> <!--Cierre Col-md4 -->
      </div> <!-- CIERRE ROW -->
    </div>
    <!-- tabla de horarios -->
    <div class="horario mt-3">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-center text-uppercase mt-3">Horarios</h2>
            <p class="text-center mt-3 lead">
                Morbi risus mi, feugiat non nulla eu, dapibus sagittis turpis. Praesent vel dignissim libero. Morbi vel porttitor orci. Integer non elit eu odio vulputate aliquet at sed odio.
            </p>
            <table class="table table-hover text-center mt-4">
                <thead>
                    <tr>
                        <th class="text-center">Día</th>
                        <th class="text-center">De</th>
                        <th class="text-center">Hasta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>Lunes</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Martes</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Miércoles</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Jueves</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Viernes</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Sábado</td>
                        <td>10:00</td>
                        <td>14:00</td>
                    </tr>
                    <tr>
                        <td>Domingo</td>
                        <td>Cerrado</td>
                        <td>Cerrado</td>
                    </tr>
                </tbody>
           </table>
          </div>
          <div class="col-md-6 bg-horario"></div>
        </div>
      </div>
    </div>
    <!-- PRODUCTOS -->
    <section class="productos container py-5">
      <h2 class="encabezado text-center text-uppercase mt-4">
        <span class="text-lowercase d-block">nuestros</span> productos
      </h2>
      <div class="row py-5">
        <?php
          $productos = obtenerProductos(4);
          
          while($producto = $productos->fetch_assoc() ){
          /*  echo "<pre>";
            var_dump($producto);
            echo "</pre>";*/
          ?>
        <div class="col-md-3 mb-4">
          <div class="card">
            <a href="producto.php?id=<?php echo $producto['id']; ?>">
              <img src="img/<?php echo $producto['imagen_mini']; ?>" alt="PRODUCTO 1" class="card-img-top">
              <div class="card-body">
                <h3 class="card-title text-center text-uppercase">
                <?php echo $producto['nombre']; ?>
                </h3>
                <p class="card-text text-center text-uppercase">
                <?php echo $producto['descripcion_corta']; ?>
                </p>
                <p class="precio mb-0 lead text-center">
                <?php echo $producto['precio']; ?>
                </p>
              </div>
            </a>
          </div> <!--CARD -->
        </div><!-- CIERRE COL-MD-3 -->
        <?php
          };
        ?>
      </div><!--ROW-->
    </section>
    

<?php
  include 'templates/citas.php';
  include 'templates/footer.php';
?>
