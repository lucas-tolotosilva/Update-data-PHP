<?php
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
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

// Cria o comando SQL para inserir os dados na tabela
$sql_insert = "INSERT INTO usuario (nome, email, tel) VALUES ('$nome', '$email', '$telefone')";
if ($conn->query($sql_insert) === TRUE) {
  echo "Dados inseridos com sucesso!";
} else {
  echo "Erro ao inserir os dados: " . $conn->error;
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
  echo "</table> ";
} else {
  echo "Nenhum registro encontrado.";
}

// Permitir que o usuário pesquise os dados da tabela usando um formulário de pesquisa
echo "<form action='listar.php' method='POST'>";
echo "<label for='busca'>Pesquisar:</label>";
echo "<input type='text' id='busca' name='busca'>";
echo "<input type='submit' value='Buscar'>";
echo "</form>";

// Encerrar a conexão com o banco de dados
$conn->close();
