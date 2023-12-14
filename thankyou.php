<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThankYou</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container my-5 text-center">
        <h2>Non c'è che dire, sei una forza della natura.</h2>
        <p>Ora torna a fare i compiti.</p>
        <button onclick="window.location.href = 'index.php'" type="button" class="btn btn-primary">Torna indietro</button>
    </div>
</body>

</html>