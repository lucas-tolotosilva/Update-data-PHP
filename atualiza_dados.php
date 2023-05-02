<?php


                $sql_select = "SELECT * FROM super_herois";
                $result = $conn->query($sql_select);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {}
                }
            ?>

// Conectar-se ao banco de dados MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trab_bd";

$conn = new mysqli($servername, $username, $password, $dbname);


// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
  die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome_at = $nome;
$email_at = $email;
$telefone_at = $telefone;

// Atualizar os dados na tabela do banco de dados
$sql_update = "UPDATE usuario SET nome='$nome_at', email='$email_at', tel='$telefone_at' WHERE id=$id";

if ($conn->query($sql_update) === TRUE) {
  echo "Dados atualizados com sucesso!";
} else {
  echo "Erro ao atualizar os dados: " . $conn->error;
}

// Executar uma consulta SQL para recuperar os dados da tabela
$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

// Exibir os dados na página usando HTML e PHP
if ($result->num_rows > 0) {
  echo "<table border='1px'>";
  echo "<tr><th '>ID</th><th>Nome</th><th>E-mail</th><th>Telefone</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td >" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["email"] . "</td><td>" . $row["tel"] . "</td></tr> <br> ";
  }
  echo "</table> <br> <button onclick='window.location.href=`http://localhost/Projeto%201%20-%20P1%20Prog.%20Web/atualiza_dados.php`'>Atualizar os dados</button> <br>";
} else {
  echo "Nenhum registro encontrado.";
}
// Fechar a conexão com o banco de dados
$conn->close();
