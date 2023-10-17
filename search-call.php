<?php 
    session_start();
    include 'navbar.php';
    include 'style.php';
    include 'footer.php';

    $called = array();
    $file = fopen("file.txt","r");

    while (!feof($file)) {
        $register = fgets($file);
        $called[] = $register;
    }
    
    fclose($file);
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

                <?php 
                
                foreach($called as $calls) {

                    $calledBreak = explode("#", $calls);

                    if (count($calledBreak) < 2) {
                        continue;
                    }
                ?>

                    <div class="card mb-3 bg-light mt-3 card-class">
                        <h5><?php print_r ($calledBreak[1]); ?></h5>
                        <h6><?php print_r ($calledBreak[2]); ?></h6>
                        <p><?php print_r ($calledBreak[3]); ?></p>
                    </div>

                <?php }?>

            </div>

        </div>
    </div>


</body>
</html>