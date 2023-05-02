<head>
    <link rel="icon" type="image/png" href="https://e7.pngegg.com/pngimages/39/346/png-clipart-wolverine-superhero-mask-batman-party-wolverine-superhero-logo-thumbnail.png">
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<title>Heróis</title>
</head>
<?php 
    require 'conexao.php';

    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $poder = $_POST['poder'];
    $liga = $_POST['liga'];
    $pf = $_POST['pf'];

    // Insere os dados na tabela SUPER_HEROIS
    //$sql_insert = "INSERT INTO super_herois (nome, poder, liga, ponto_fraco) VALUES ('$nome', '$poder', '$liga', '$pf')";
    
    // if ($conn->query($sql_insert) === TRUE) {
    //     echo "Dados inseridos com sucesso!";
    // } else {
    //     echo "Erro ao inserir os dados: " . $conn->error;
    // }
    $conn->close();

?>
    
	<div class="font-poppins font-normal text-[18px] w-full h-screen bg-[#EEEEEE] flex items-center justify-center flex-col gap-20">
        <h2 class="font-bold text-[50px]">Heróis Cadastrados</h2>
		<div class="bg-white w-1/2 h-1/2 flex flex-col">
			<?php 
                $sql_select = "SELECT * FROM super_herois";
                $result = $conn->query($sql_select);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {}
                }
            ?>
            <div></div>
		</div>
		
	</div>