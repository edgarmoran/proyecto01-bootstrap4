<?php
try{
    $bd = new mysqli('localhost', 'root', '','carolina_spa');


}catch(Exception $e){
    echo $e->getMessage();
    exit;

}
/*
if($bd->ping()){
    echo 'Todo bien';
}else{
    echo $bd->connect_error;
}
*/







?>