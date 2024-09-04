<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Nome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container mt-5">
    <h1>Olá, <?php echo htmlspecialchars($_SESSION['nome'] ?? 'Visitante'); ?></h1>
</div>

</body>
</html>
