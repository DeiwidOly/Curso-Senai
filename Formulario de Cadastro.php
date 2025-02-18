<?php
// Inicialização das variáveis com valores vazios
$nome = $email = $telefone = $rua = $complemento = $cidade = $estado = $cep = "";

// Verifica se o formulário foi enviado e obtém os dados
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nome'])) {
    // Recebendo os dados via GET
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    $rua = $_GET['rua'];
    $complemento = $_GET['complemento'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];
    $cep = $_GET['cep'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .form-container, .result-container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 48%;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-size: 14px;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"], input[type="email"], input[type="tel"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group-inline {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .form-group-inline input {
            width: 48%;
        }

        .btn-submit {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }

        .result-container p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .result-container strong {
            color: #333;
        }

        /* Esconde a seção de resultados quando os dados não são enviados */
        .result-container {
            display: <?php echo ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nome'])) ? 'block' : 'none'; ?>;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Formulário de Cadastro -->
    <div class="form-container">
        <h1>Formulário de Cadastro</h1>
        <form method="GET" action="">
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>

            <div class="form-group">
                <label for="telefone">Número de Telefone:</label>
                <input type="tel" id="telefone" name="telefone" value="<?php echo $telefone; ?>" required>
            </div>

            <div class="form-group">
                <label>Endereço Completo:</label>
                <div class="form-group-inline">
                    <input type="text" id="rua" name="rua" placeholder="Rua" value="<?php echo $rua; ?>" required>
                    <input type="text" id="complemento" name="complemento" placeholder="Complemento" value="<?php echo $complemento; ?>">
                </div>
                <div class="form-group-inline">
                    <input type="text" id="cidade" name="cidade" placeholder="Cidade" value="<?php echo $cidade; ?>" required>
                    <input type="text" id="estado" name="estado" placeholder="Estado" value="<?php echo $estado; ?>" required>
                </div>
                <div class="form-group">
                    <input type="number" id="cep" name="cep" placeholder="CEP" value="<?php echo $cep; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" class="btn-submit" value="Enviar">
            </div>
        </form>
    </div>

    <!-- Exibição do Resultado -->
    <div class="result-container">
        <h1>Informações Recebidas</h1>
        <?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nome'])): ?>
            <p><strong>Nome Completo:</strong> <?php echo htmlspecialchars($nome); ?></p>
            <p><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
            <p><strong>Endereço:</strong> <?php echo htmlspecialchars($rua) . ", " . htmlspecialchars($complemento) . ", " . htmlspecialchars($cidade) . ", " . htmlspecialchars($estado) . ", " . htmlspecialchars($cep); ?></p>
        <?php else: ?>
            <p><em>Aguardando envio de dados...</em></p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
