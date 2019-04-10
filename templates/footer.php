<footer class="footer-sitio pt-3 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
            <p class="text-justify">flkjadl;sf jal;sdjf ;lasjdf ;lasjdf ;lasjdfasdjf;lkajsdlkfj alsdjflasdj f;lkasdjf;l asd</p>
          </div>
          <div class="col-md-4">
            <h3 class="text-uppercase text-center pb-4">Horario</h3>
            <p class="text-center">Lun-Vie: 9 AM - 7 PM</p>
            <p class="text-center">Sábado: 9 AM - 2 PM</p>
            <p class="text-center">Domingo: Cerrado</p>
          </div>
          <div class="col-md-4">
            <h3 class="text-uppercase text-center pb-4">Contacto</h3>
            <p class="text-center">66 East Sunnyslope Avenue </p>
            <p class="text-center">Landsowne, PA 19050</p>
            <nav class="sociales text-center">
              <ul>
                <li><a href="http://facebook.com"><span class="sr-only"> Facebook</span></a></li>
                <li><a href="http://www.twitter.com"><span class="sr-only"> Twitter</span></a></li>
                <li><a href="http://instagram.com"><span class="sr-only"> Instagram</span></a></li>
                <li><a href="http://www.pinterest.com"><span class="sr-only"> Pinterest</span></a></li>
                <li><a href="http://youtube.com"><span class="sr-only"> YouTube</span></a></li>
              </ul>
            </nav>
          </div>
          <hr class="w-100">
          <p class="text-center copyright w-100">Carolina SPA & Salón 2018. Todos los derechos reservados.</p>
        </div><!--ROW -->
      </div><!--CONTAINER-->
    </footer>



    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
<?php
  //Guarda todo el contenido a un archivo

  $fp = fopen($archivoCache, 'w');
  fwrite($fp, ob_get_contents());
  fclose($fp);

  // Enviar al navegador
  ob_end_flush();

?>