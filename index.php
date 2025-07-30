<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Serviços (Exemplo)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Status dos Serviços (Exemplo)</h1>
        <div id="service-status">
            <?php
            // Este é um exemplo de como o PHP poderia interagir com dados.
            // NUNCA carregue ou exiba um docker-compose.yml aqui diretamente.
            // Para um cenário real, você buscaria o status real dos serviços.
            $serviceName = "MeuAppWeb";
            $status = "Rodando"; // Em um ambiente real, você obteria isso de uma API ou log
            $port = "8080";

            echo "<p>Serviço: <strong>" . htmlspecialchars($serviceName) . "</strong></p>";
            echo "<p>Status: <span class='status-" . strtolower($status) . "'>" . htmlspecialchars($status) . "</span></p>";
            echo "<p>Porta: " . htmlspecialchars($port) . "</p>";

            // Exemplo de como o PHP pode gerar um botão que o JavaScript usaria
            echo '<button id="refreshButton">Atualizar Status</button>';
            ?>
        </div>
        <div id="message"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>
