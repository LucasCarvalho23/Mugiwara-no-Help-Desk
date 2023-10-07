<?php 
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
    
    <div class = "container-call-class">

        <div class = "container-open-call-class">

            <div class = "card-body bg-light border-bottom">
                OPEN CALL
            </div>

            <form class = "form-group">

                <label class="form-label">Title</label>
                <input class = "form-control" type="text" name="title-form-name">
                <label class="form-label mt-3">Category</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="3">Three</option>
                </select>
                <label class="form-label mt-3">Description</label>
                <p>
                    <textarea class="form-control" name="" id="" rows="4"></textarea>
                </p>
                <div class="d-grid gap-2">
                    <a class = "btn btn-light border-dark" href="#">Open Call</a>
                    <a class = "btn btn-light border-dark" href="#">Clean Call</a>
                </div>

            </form>

        </div>

    </div>

</body>
</html>