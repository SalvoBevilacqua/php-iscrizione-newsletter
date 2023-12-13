<?php
include __DIR__ . "/functions.php";

session_unset();
session_start();

if (isset($_SESSION['flag']) && $_SESSION['flag'] === true) {
    header('Location: ./thankyou.php');
    die;
}

$_SESSION['flag'] = !empty($_SESSION['flag']) ? $_SESSION['flag'] : false;

$_SESSION['email'] = !empty($_SESSION['email']) ? $_SESSION['email'] : '';
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

        <?php
        if (!isset($_SESSION['email'])) {
            $_SESSION['email'] = $_GET['mail'];
        };
        $_SESSION['flag'] = $bool;

        if (isset($_SESSION['flag']) && $_SESSION['flag'] === true) {
            header('Location: ./thankyou.php');
            die;
        }
        ?>

        <div class="alert <? echo $class; ?>" role="alert">
            <p class="m-0">
                <?php if ($string != '') {
                    echo "L'email " . $_SESSION['email'] . $string;
                } ?>
            </p>
        </div>

    </div>
</body>

</html>