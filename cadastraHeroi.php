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
    

?>
    
	<div class="snap-y font-poppins font-normal text-[18px] w-full h-screen bg-[#EEEEEE] flex items-center justify-center flex-col gap-20">
        <h2 class="font-bold text-[50px]">Heróis Cadastrados</h2>
		<div class="bg-white w-1/2 h-1/2 flex flex-col">
			
            <div class="w-full border-b-4 border-indigo-500">
                <div class="pt-4 text-white font-bold justify-center grid grid-rows-4 grid-cols-4 text-center gap-4 w-full h-16 bg-indigo-500 m-0 p-0">
                    <div>Nome</div>
                    <div>Poder</div>
                    <div>Liga</div>
                    <div>Ponto Fraco</div>
                </div>
            </div>
            
            <?php
                $sql_select = "SELECT * FROM super_herois";
                $result = $conn->query($sql_select);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='w-full  border-b-2 border-indigo-500 '>
                        <div class='pt-4 bg-white text-indigo-500 font-bold justify-center grid grid-rows-4 grid-cols-4 text-center gap-4 w-full h-16 bg-indigo-500 m-0 p-0'>
                            <div>" . $row["nome"] . "</div>
                            <div>" . $row["poder"] . "</div>
                            <div>" . $row["liga"] . "</div>
                            <div>" . $row["ponto_fraco"] . "</div>
                        </div>
                    </div> ";
                    }
                } else {
                    echo "Nenhum registro encontrado.";
                }
            ?>
            
		</div>
		
	</div>



<?php 
$conn->close();
?>