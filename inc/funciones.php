<?php

//Muestra multiples productos, cantidad de productos como paramentro

function obtenerProductos($cantidad = 10){
    include 'conexion.php';

    try{
        $sql = "SELECT * FROM productos LIMIT $cantidad";
        $resultado = $bd->query( $sql );
    }catch(exception $e){
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}

//Muestra ub solo producto utilizando el ID como parametro

    function obtenerProducto($idProducto){
        include 'conexion.php';

        try{
            $sql = "SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta FROM productos WHERE id = $idProducto ";
            $resultado = $bd->query($sql);
        } catch (exception $e) {
            echo $e->getMessage();
            return array();
        }
        return $resultado;
    }

?>