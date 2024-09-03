<?php
include('conexao.php');

    $CPF = $_POST['cpf'];
    $USERNAME = $_POST['username'];
    $SENHA = $_POST['senha'];
    $NOME = $_POST['nome'];
    $EMAIL = $_POST['email'];

    mysqli_query($conexao, " INSERT INTO usuario(USU_CPF, USU_USERNAME, USU_SENHA, USU_NOME, USU_EMAIL)

 

VALUES ('$CPF', '$USERNAME', '$SENHA', '$NOME', '$EMAIL') ");
mysqli_close($conexao);

    ?>
      <p align="center"><a href="index.php">Voltar</a></p>
</body>
</html>