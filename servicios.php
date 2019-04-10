<?php
  $titulo = 'Servicios';
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>

    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="img/servicios.jpg" alt="Servicios" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-4">Servicios</h2>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
            <main class="col-lg-8 contenidoPrincipal">
                <h2 class="d-block d-md-none text-uppercase text-center">Servicios</h2>
                <div id="servicios">

                  <div class="card">
                    <div class="card-header" id="servicio1">
                      <h2 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="#descripcion1">
                          Servicio 1
                        </button>
                    </h2>
                    </div><!--CARD HEADER-->
                    <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                      <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget metus in lorem aliquet hendrerit. Mauris venenatis commodo lacus, eu sodales sapien. Morbi laoreet mollis sodales. Morbi vel volutpat enim. Donec imperdiet velit lacus, vel interdum magna dapibus vel. Nam suscipit odio quis justo pharetra eleifend vel sit amet neque. Sed massa metus, faucibus quis leo et, varius dapibus neque. Duis quis consectetur arcu. Vestibulum nec dignissim arcu.</p>
                      </div>
                    </div>
                  </div><!-- FINALIZA CARD 1 -->

                  <div class="card">
                      <div class="card-header" id="servicio2">
                        <h2 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">
                            Servicio 2
                          </button>
                      </h2>
                      </div><!--CARD HEADER-->
                      <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">
                        <div class="card-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget metus in lorem aliquet hendrerit. Mauris venenatis commodo lacus, eu sodales sapien. Morbi laoreet mollis sodales. Morbi vel volutpat enim. Donec imperdiet velit lacus, vel interdum magna dapibus vel. Nam suscipit odio quis justo pharetra eleifend vel sit amet neque. Sed massa metus, faucibus quis leo et, varius dapibus neque. Duis quis consectetur arcu. Vestibulum nec dignissim arcu.</p>
                        </div>
                      </div>
                  </div><!-- FINALIZA CARD-->

                  <div class="card">
                      <div class="card-header" id="servicio3">
                        <h2 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="#descripcion3">
                            Servicio 3
                          </button>
                      </h2>
                      </div><!--CARD HEADER-->
                      <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">
                        <div class="card-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget metus in lorem aliquet hendrerit. Mauris venenatis commodo lacus, eu sodales sapien. Morbi laoreet mollis sodales. Morbi vel volutpat enim. Donec imperdiet velit lacus, vel interdum magna dapibus vel. Nam suscipit odio quis justo pharetra eleifend vel sit amet neque. Sed massa metus, faucibus quis leo et, varius dapibus neque. Duis quis consectetur arcu. Vestibulum nec dignissim arcu.</p>
                        </div>
                      </div>
                  </div><!-- FINALIZA CARD-->

                </div>
            </main>
            <aside class="col-lg-4 pt-4 pt-lg-0">
                <div class="sidebar p-3">
                    <h2 class="text-center text-uppercase mt-3">Nuevos Clientes</h2>
                    <p class="lead text-center mt-4">
                      Recibe 20% de descuento con este cupón.
                    </p>

                    <div class="cupon px-2 py-3 mt-4">
                      <p class="text-uppercase text-center m-0">
                        <span class="display-4">20% Descuento</span>
                        <br>
                        en todos los servicios
                      </p>
                    </div>

                </div>
            </aside>
        </div>
    </div>
<?php
  include 'templates/citas.php';
  include 'templates/footer.php';
?>