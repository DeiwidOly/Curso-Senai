<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $telefone = $_POST["telefone"];
      $rua = $_POST["rua"];
      $complemento = $_POST["complemento"];
      $cidade = $_POST["cidade"];
      $estado = $_POST["estado"];
      $cep = $_POST["cep"];

      echo "<p><strong>Nome:</strong> $nome</p> ";
      echo "<p><strong>E-mail:</strong> $email</p> ";
      echo "<p><strong>Telefone:</strong> $telefone</p> ";
      echo "<p><strong>Rua:</strong> $rua</p> ";
      echo "<p><strong>Complemento:</strong> $complemento</p> ";
      echo "<p><strong>Cidade:</strong> $cidade</p> ";
      echo "<p><strong>Estado:</strong> $estado</p> ";
      echo "<p><strong>CEP:</strong> $cep</p> ";
  }
?>

