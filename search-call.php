<?php 

    session_start();
    include 'navbar.php';
    include 'style.php';
    include 'footer.php';

    echo ("<pre>");
    print_r ($_SESSION);
    echo ("</pre>");
    echo ("<hr>");

    $called = array();
    $file = fopen("file.txt","r");

    while (!feof($file)) {
        $register = fgets($file);
        $called[] = $register;
    }
    
    fclose($file);

    foreach($called as $calls) {

        $calledBreak = explode("#", $calls);

        if (!$calledBreak[0] == $_SESSION['login']) {
            echo ("<pre>");
            print_r ($calledBreak);
            echo ("</pre>");
            echo ("<br>");
        } else {
            echo ('Not working');
            echo ("<br>");
        }

        echo ("<pre>");
        print_r ($calledBreak);
        echo ("</pre>");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mugiwara no Help Desk</title>
</head>
<body>
    
    <div class = "container-main-search-class">
        <div class = "container-inside-search-class">

            <div class = "card-body bg-light border-bottom">
                    OPEN FOR ME
            </div>

            <div class = "card-class">
                <div class="card mb-3 bg-light mt-3 card-class">
                    <h5>Teste</h5>
                    <h6>Teste</h6>
                    <p>Teste</p>
                </div>
                <div class="card mb-3 bg-light card-class">
                    <h5>Teste</h5>
                    <h6>Teste</h6>
                    <p>Teste</p>
                </div>
                <div class="card mb-3 bg-light card-class">
                    <h5>Teste</h5>
                    <h6>Teste</h6>
                    <p>Teste</p>
                </div>
            </div>

        </div>
    </div>


</body>
</html>