<?php
    $titulo = 'Sobre nosotros';
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>

    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="img/nosotros.jpg" alt="Nosotros" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-4">Nosotros</h2>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
            <main class="col-lg-8 contenidoPrincipal">
                <h2 class="d-block d-md-none text-uppercase text-center">Nosotros</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget metus in lorem aliquet hendrerit. Mauris venenatis commodo lacus, eu sodales sapien. Morbi laoreet mollis sodales. Morbi vel volutpat enim. Donec imperdiet velit lacus, vel interdum magna dapibus vel. Nam suscipit odio quis justo pharetra eleifend vel sit amet neque. Sed massa metus, faucibus quis leo et, varius dapibus neque. Duis quis consectetur arcu. Vestibulum nec dignissim arcu.</p>
                <p>Sed ullamcorper mi suscipit mattis tempus. Vivamus porta nisl quis condimentum consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut sit amet arcu pellentesque, porta dui non, imperdiet erat. Proin tempus sodales felis, sit amet molestie lacus finibus sit amet. Nam eget ex urna. Donec ut metus purus. Maecenas ac lorem mauris. Donec vel condimentum erat. Mauris id ultrices lorem, at pretium nunc. Maecenas molestie, massa id vulputate tempus, dui urna dapibus mi, a dictum neque erat sit amet arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis dignissim tincidunt arcu, vel dignissim augue iaculis quis. Donec nec venenatis lorem.</p>
                <p>Ut sit amet odio sit amet leo scelerisque ornare. Integer at felis mi. Donec porta ex in euismod sodales. Quisque mauris nulla, lacinia vel velit vel, semper laoreet tortor. Donec venenatis gravida lectus. Integer id efficitur ipsum, at gravida nisl. Nunc molestie ante sit amet dolor dignissim, dignissim euismod sem maximus. Aenean porta volutpat erat, quis lacinia mauris viverra nec. Quisque suscipit pellentesque malesuada. Praesent ut nunc facilisis, feugiat libero ac, tincidunt mi. Nulla facilisi. Curabitur imperdiet elit nec congue condimentum. Mauris eget vulputate lacus. Morbi semper elit ac feugiat ultrices.</p>
                <h2 class="text-center text-uppercase encabezado">
                    <span class="text-lowercase d-block">Conoce nuestras</span> Instalaciones
                 </h2>
                <div class="imagenes pt-4">
                  <a href="#" data-target="#imagen1" data-toggle="modal">
                    <img src="img/galeria_mini_01.jpg"  alt="Instalaciones" class="img-fluid">
                  </a>
                  <a href="#" data-target="#imagen2" data-toggle="modal">
                     <img src="img/galeria_mini_02.jpg"  alt="Instalaciones" class="img-fluid">
                  </a>
                  <a href="#" data-target="#imagen3" data-toggle="modal">
                     <img src="img/galeria_mini_03.jpg"  alt="Instalaciones" class="img-fluid">
                  </a>

                  <div class="modal fade" id="imagen1" tabindex="-1" role="dialog" aria-labelledby="Imagen 01" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <img src="img/galeria_grande_01.jpg" alt="Imagen 01" class="img-fluid">
                        </div><!-- MODAL BODY -->
                      </div><!--MODAL CONTENT-->
                    </div><!--MODAL DIALOG-->
                  </div><!--MOdal and FADE-->
                  <div class="modal fade" id="imagen2" tabindex="-1" role="dialog" aria-labelledby="Imagen 01" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <img src="img/galeria_grande_02.jpg" alt="Imagen 01" class="img-fluid">
                        </div><!-- MODAL BODY -->
                      </div><!--MODAL CONTENT-->
                    </div><!--MODAL DIALOG-->
                  </div><!--MOdal and FADE-->
                  <div class="modal fade" id="imagen3" tabindex="-1" role="dialog" aria-labelledby="Imagen 01" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <img src="img/galeria_grande_03.jpg" alt="Imagen 01" class="img-fluid">
                          </div><!-- MODAL BODY -->
                        </div><!--MODAL CONTENT-->
                      </div><!--MODAL DIALOG-->
                    </div><!--MOdal and FADE-->
                </div>   
            </main>

            <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
                <div class="sidebar horario">
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
            </aside>
        </div>
    </div>
   
<?php
  include 'templates/footer.php';
?>