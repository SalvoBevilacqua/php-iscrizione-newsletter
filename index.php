<?php
include __DIR__ . "/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <form action="index.php" method="GET">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="mail">
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>
        </form>

        <div class="alert <? echo $class; ?>" role="alert">
            <?php if ($string != '') {
                echo $string;
            } ?>
        </div>

    </div>
</body>

</html>