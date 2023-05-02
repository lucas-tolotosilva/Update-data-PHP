<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="https://e7.pngegg.com/pngimages/39/346/png-clipart-wolverine-superhero-mask-batman-party-wolverine-superhero-logo-thumbnail.png">
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<title>Formulario de Cadastro de Heróis</title>
</head>
<body class="font-poppins font-normal text-[18px] w-full h-screen bg-[#EEEEEE] flex items-center justify-center flex-col gap-20">
	<h2 class="font-bold text-[50px]">Cadastro de Super-Herói</h2>
	<div class="flex rounded-lg overflow-hidden">
		<div class="w-3/4 grayscale">
			<img src="https://blog.br.playstation.com/tachyon/sites/4/2022/06/c50ed40ccbee94460e55dee40a077efc09474a20.jpg?resize=1088%2C612&crop_strategy=smart"/>
		</div>
		
		<div class="bg-[#773C85] w-full px-4 py-4 w-1/4 text-white h-full flex items-center justify-center">
			<form class="w-full" action="cadastraHeroi.php" method="POST">
				
				<label for="nome">Nome:</label> <br />
				<input class="rounded-full w-full text-[#773C85] pl-2 focus:outline-none" type="text" id="nome" name="nome" required><br><br>

				<label for="poder">Poder</label> <br />
				<input class="rounded-full w-full text-[#773C85] pl-2 focus:outline-none" type="text" id="poder" name="poder" required><br><br>

				<label for="liga">Liga</label> <br />
				<input class="rounded-full w-full text-[#773C85] pl-2 focus:outline-none" type="text" id="liga" name="liga" required><br><br>

				<label for="pf">Ponto Fraco</label> <br />
				<input class="rounded-full w-full text-[#773C85] pl-2 focus:outline-none" type="text" id="pf" name="pf" required><br><br>

				<input class="bg-white font-bold text-[#440053] rounded-full px-5 py-1 hover:cursor-pointer" type="submit" value="Cadastrar">
			
			</form>
		</div>
		
	</div>
	

	</div>
</body>
</html>