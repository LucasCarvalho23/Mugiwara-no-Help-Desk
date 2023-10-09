<?php 
    session_start();

    $valueLogin = $_SESSION['login'];
    $valueTitle = $_POST['title'];
    $valueCategory = $_POST['category'];
    $valueDescription = $_POST['description'];
    $valueForm = $valueLogin . " # " . $valueTitle . " # " . $valueCategory . " # " . $valueDescription . PHP_EOL;

    $file = fopen("file.txt","a");
    fwrite($file,$valueForm);
    fclose($file);

    header('Location: open-call.php');

?>