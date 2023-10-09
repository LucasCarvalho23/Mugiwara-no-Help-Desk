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
    
    <div class = "container-call-class">

        <div class = "container-open-call-class">

            <div class = "card-body bg-light border-bottom">
                OPEN CALL
            </div>

            <form class = "form-group" method="post" action = "open-call-script.php">

                <label class="form-label">Title</label>
                <input class = "form-control" type="text" name="title" placeholder="Title" required>
                <label class="form-label mt-3">Category</label>
                <select class="form-select" id="inputGroupSelect01" name = "category" required>
                    <option selected></option>
                    <option value="Help Me">Help Me!</option>
                    <option value="Kill someone">Kill someone</option>
                    <option value="Create a weapon">Create a weapon</option>
                    <option value="Cook a dish">Cook a dish</option>
                    <option value="Weather forecast">Weather forecast</option>
                    <option value="Heal someone">Heal someone</option>
                    <option value="Poneglyph">Poneglyph</option>
                    <option value="Repair newship">Repair newship</option>
                    <option value="Play a Song">Play a Song</option>
                    <option value="Water problems">Water problems</option>
                </select>
                <label class="form-label mt-3">Description</label>
                <p>
                    <textarea class="form-control" name="description" rows="4" placeholder="What's the problem?" required></textarea>
                </p>
                <div class="d-grid gap-2">
                    <button class = "btn btn-light border-dark" type="submit">Open Call</button>
                    <button class = "btn btn-light border-dark" type="reset">Clean Call</button>
                </div>

            </form>

        </div>

    </div>

</body>
</html>