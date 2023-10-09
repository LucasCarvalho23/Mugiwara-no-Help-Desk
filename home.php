<?php
    session_start();
    include 'navbar.php';
    include 'style.php';
    include 'footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class = "container-menu-class">
        <div class = "container-choice-class border">
            <div class = "card-body bg-light border-bottom">
                Menu 
            </div>
            <div class = "container mt-5 ms-5">
                <div class = "row">
                    <div class = "col-md-6">
                    <a href="open-call.php">
                        <img src="image/open-img.png" width="75px">
                    </a>
                    </div>
                    <div class = "col-md-6">
                    <a href="search-call.php">
                        <img src="image/search-img.png" width="75px">
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>