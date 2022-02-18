<?php
    // Aquí verifica si recibió algo por POST
    // y si existe el valor para el elemento username
    if (isset($_POST['username'])){
        /* Con echo, se devuelve como un String el valor
        que debería imprimir */
        echo $_POST['username'];
    }
    else
        echo 'Hola Mundo con Ajax';
?>