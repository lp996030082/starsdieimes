<!DOCTYPE html>
<link rel="stylesheet" href="starnunes.css">
<html>
<head>
    <title>Card em PHP com estilo inspirado na Starbucks</title>
    <style>

    </style>
</head>
<body>
    <?php
    // Dados do card
    $titulo = "Starbucks";
    $conteudo = "Descubra uma ampla seleção de bebidas quentes e geladas, acompanhamentos deliciosos e produtos exclusivos.";

    // Imprime o card
    echo '<div class="card">';
    echo '<h3>' . $titulo . '</h3>';
    echo '<p>' . $conteudo . '</p>';
    echo '<a href="#">Saiba mais</a>';
    echo '</div>';
    ?>
</body>
</html>