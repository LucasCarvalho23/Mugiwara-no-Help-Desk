<?php 
    session_start();
    $_SESSION['authentication'] = 0;

    $validationLogin = false;
    
   
    $userlist = array (
        array('id' => '0', 'login' => 'Luffy', 'password' => '1234'),
        array('id' => '1', 'login' => 'Zoro', 'password' => '1234'),
        array('id' => '2', 'login' => 'Usopp', 'password' => '1234'),
        array('id' => '3', 'login' => 'Sanji', 'password' => '1234'),
        array('id' => '4', 'login' => 'Nami', 'password' => '1234'),
        array('id' => '5', 'login' => 'Chopper', 'password' => '1234'),
        array('id' => '6', 'login' => 'Robin', 'password' => '1234'),
        array('id' => '7', 'login' => 'Franky', 'password' => '1234'),
        array('id' => '8', 'login' => 'Brook', 'password' => '1234'),
        array('id' => '9', 'login' => 'Jimbe', 'password' => '1234')
    );

    foreach ($userlist as $value) {
                
        if ($_POST['login'] == $value['login']) {
            $validationLogin = true;
            $_SESSION['authentication'] = 1;
        } 
        
    }

    if ($validationLogin) {
        header('Location: home.php');
    } else {
        header('Location: index.php');
    }

?>