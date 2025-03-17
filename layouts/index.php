<?php
// Ativar exibição de erros no PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Signos</title>
    <?php include('header.php'); ?>
</head>
<body>
<div class="container mt-5">
        <h2 class="text-center">Descubra seu Signo</h2>
        <form id="signo-form" method="POST" action="show_zodiac_sign.php" class="mt-4">
            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
            <button type="submit" class="btn btn-primary">Descobrir Signo</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>