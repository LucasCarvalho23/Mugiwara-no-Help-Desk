<?php
    session_start();
    unset($_SESSION['authentication']);
    header('Location: index.php');
?>
