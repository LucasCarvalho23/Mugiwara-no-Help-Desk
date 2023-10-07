<?php 
    session_start();
    include 'style.php';
    include 'navbar.php';
    include 'footer.php';
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
    
    <!-- LOGIN -->
    <div class = "container-main-class">
        <div class = "container-login-class">

            <form action = "checklogin.php" method="post" class = "p-5">
                <p>
                    <label class="col-sm-2 col-form-label">Login</label>
                    <input class="form-control" type="text" name = "login">
                </p>
                <p>
                    <label class="col-sm-2 col-form-label">Password</label>
                    <input class="form-control" type="password" name="password">
                </p>

                <?php 
                    if (isset($_SESSION['authentication']) && $_SESSION['authentication'] == 0) {
                ?>

                <p>
                    <span class = "text-danger">Wrong login and/or password</span>
                </p>

                <?php 
                    }
                ?>

                <p>
                    <button class = "btn btn-primary" type="submit">Sign In</button>
                </p>
            </form>

        </div>
    </div>


</body>
</html>