<?php
//Validar contenido enviado a traves de paginas PHP usando GET
    if (isset($_GET['id']) ){ //Valida que el id tenga un valor
        if(filter_var($_GET['id'], FILTER_VALIDATE_INT )){   //Valuda que el valor del ID sea un entero
            $productoID = $_GET['id'];
        }else{
            header('Location: 404.html');
            exit;
        }   
    }    
    $titulo = 'Producto';
    include 'templates/header.php';
    include 'templates/navegacion.php';
    include 'inc/funciones.php';

   /* ini_set("display_errors","1"); //Para que noes muestre los errores PHP
    error_reporting(E_ALL); //Todo tipo de errores */


    $resultado = obtenerProducto($productoID);
    /*echo "<pre>";
    var_dump($resultado);
    echo "</pre>"; */
    if($resultado->num_rows > 0){
        while($producto = $resultado->fetch_assoc()){
               /* echo "<pre>";
                var_dump($producto);
                echo "</pre>";*/ 
    ?>

        <div class="container pt-4">
            <div class="row no-gutters">
                <div class="col-12 hero">
                    <img src="img/<?php echo $producto["imagen_completa"]; ?>" alt="Nosotros" class="img-fluid">
                    <h2 class="text-uppercase d-none d-md-block py-3 px-4"><?php echo $producto["nombre"]; ?></h2>
                </div>
            </div>
        </div>

        <div class="container pt-4">
            <div class="row">
                <main class="col-md-8 contenidoPrincipal">
                    <h2 class="d-block d-md-none text-uppercase text-center"><?php echo $producto["nombre"]; ?></h2>
                    <p>
                        <?php echo $producto["descripcion"]; ?>
                    </p>
                </main>
                <aside class="col-md-4 pt-4 pt-lg-0">
                    <div class="sidebar pt-5 descripcionProducto">
                        <h2 class="text-center text-uppercase mt-4">Descripción</h2>
                        <p>
                        <?php echo $producto["descripcion_corta"]; ?>
                        </p>
                        <h3 class="text-uppercase text-center mt-2">PRECIO</h3>
                        <p class="text-center p-2 display-4"><?php echo $producto["precio"]; ?></p>
                    </div>
                </aside>
            </div>
        </div>
    

    <?php
        } //Fin del WHILE
    }else{ 
        echo '<h2 class="text-center text-uppercase d-md-block py-3 px-4">PRODUCTO NO ENCONTRADO</h2>';
    }
  include 'templates/footer.php';
?>