<?php
    $title = "Главная страница";
    include("header.php");
?>
<?php 
    d($_GET);
    d($_POST);

    //isset - проверка сущестования ключа в массиве 
    if( isset( $_POST['fio'] ) ){
        $sql = "INSERT INTO `customer_questions`(`id`, `fio`, `email`, `phone`, `comment`) 
        VALUES (NULL,'{$_POST['fio']}','{$_POST['email']}','{$_POST['phone']}','{$_POST['comment']}')";

        echo $sql;

        $result = mysqli_query($db, $sql);

        if( $result ){
            echo "<div>Спасибо, {$_POST['fio']} за вашу заявку.</div>";
        }else{
            echo "Произошла ошибка";
        }
    }



?>