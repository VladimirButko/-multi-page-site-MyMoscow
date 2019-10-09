<?php 
    function d($ar){
        echo "<pre>";
        print_r($ar);
        echo "</pre>";
    }

    $db = mysqli_connect('localhost', 'root', '', 'homework_26');
    mysqli_set_charset($db, 'utf8');
?>