<?php 

session_start();

if ($_SESSION['authentication'] == "1") {
    header('Location: home.php');
} else {
    header('Location: index.php');
}

?>