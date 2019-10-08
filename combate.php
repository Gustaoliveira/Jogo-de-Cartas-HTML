<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="css\style2.css">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <title>Trunfo</title>
</head>

<body>
<?php

	$j1 = $_POST['p1'];
	$j2 = $_POST['p2'];
	$tipo = $_POST['batalha'];
	

	//Personagens
	$CR7 = array(85, 90, 88, 88);
	$Backham = array(80, 83, 90, 87);
	$Dinho = array(86, 84, 89, 84);
	$Messi = array(90, 85, 90, 84);
	$Ney = array(90, 86, 88, 83);
	$Pelé = array(96, 90, 98, 91);
	$R9 = array(88, 90, 90, 90);
	$Romario = array(82, 85, 90, 85);
	$Zidane = array(79, 85, 90, 88);
	$Maradona = array(98, 90, 96, 90);


	//Jogador 1 

	if($j1 == "CR7"){
		$carta1 = $CR7[$tipo];
		$imagem1 =  "<img src='imagens/CR7.png'  class='img1'>";
	}

	if($j1 == "Backham"){
		$carta1 = $Backham[$tipo];
		$imagem1 =  "<img src='imagens/david.png'  class='img1'>";
	}

	if($j1 == "Dinho"){
		$carta1 = $Dinho[$tipo];
		$imagem1 =  "<img src='imagens/dinho.png' class='img1'>";
	}

	if($j1 == "Messi"){
		$carta1 = $Messi[$tipo];
		$imagem1 =  "<img src='imagens/messi.png'  class='img1'>";
	}

	if($j1 == "Ney"){
		$carta1 = $Ney[$tipo];
		$imagem1 =  "<img src='imagens/ney.png'  class='img1'>";
	}

	if($j1 == "Pelé"){
		$carta1 = $Pelé[$tipo];
		$imagem1 =  "<img src='imagens/pelé.png'  class='img1'>";
	}

	if($j1 == "R9"){
		$carta1 = $R9[$tipo]; 
		$imagem1 =  "<img src='imagens/r9.png'  class='img1'>";
	}
	
	if($j1 == "Romario"){
		$carta1 = $Romario[$tipo];
		$imagem1 =  "<img src='imagens/romario.png'  class='img1'>";
	}

	if($j1 == "Zidane"){
		$carta1 = $Zidane[$tipo];
		$imagem1 =  "<img src='imagens/zidane.png'  class='img1'>";
	}		

	if($j1 == "Maradona"){
		$carta1 = $Maradona[$tipo];
		$imagem1 =  "<img src='imagens/maradona.png'  class='img1'>";
	}		

	//Jogador 2

	if($j2 == "CR7"){
		$carta2 = $CR7[$tipo];
		$imagem2 =  "<img src='imagens/CR7.png' class='img2'>";
	}


	if($j2 == "Backham"){
		$carta2 = $Backham[$tipo];
		$imagem2 =  "<img src='imagens/david.png' class='img2'>";
	}

	if($j2 == "Dinho"){
		$carta2 = $Dinho[$tipo];
		$imagem2 =  "<img src='imagens/dinho.png' class='img2'>";
	}

	if($j2 == "Messi"){
		$carta2 = $Messi[$tipo];
		$imagem2 =  "<img src='imagens/messi.png' class='img2'>";
	}

	if($j2 == "Ney"){
		$carta2 = $Ney[$tipo];
		$imagem2 =  "<img src='imagens/ney.png' class='img2'>";
	}

	if($j2 == "Pelé"){
		$carta2 = $Pelé[$tipo];
		$imagem2 =  "<img src='imagens/pelé.png' class='img2'>";
	}

	if($j2 == "R9"){
		$carta2 = $R9[$tipo];
		$imagem2 =  "<img src='imagens/r9.png' class='img2'>";
	}
	
	if($j2 == "Romario"){
		$carta2 = $Romario[$tipo];
		$imagem2 =  "<img src='imagens/romario.png' class='img2'>";
	}

	if($j2 == "Zidane"){
		$carta2 = $Zidane[$tipo];
		$imagem2 =  "<img src='imagens/zidane.png' class='img2'>";
	}		

	if($j2 == "Maradona"){
		$carta2 = $Maradona[$tipo];
		$imagem2 =  "<img src='imagens/maradona.png' class='img2'>";
	}		


	
	if($carta1 == $carta2)
	{
		echo "<h1>" . "EMPATE" . "</h1>";
		echo "<div class='bb'>" . $imagem1 . $imagem2 . "</div>" . "<br>";
		echo "<a href='cartas.html'>" . "Jogar Novamente" .  "</a>"; 
	}
	else
	{
		if($carta1 > $carta2)
		{
			echo "<h1>" . $j1 . " " .  " GANHOU" . "<br>" . "JOGADOR 1" . "<br>";
			echo $imagem1 . "<br>";
			echo "<a href='cartas.html'>" . "Jogar Novamente" .  "</a>";
		}
		else{
				echo "<h1>" . $j2 . " " .  "GANHOU" . "<br>" . "JOGADOR 2" . "<br>";
				echo $imagem2 . "<br>";
				echo "<a href='cartas.html'>" . "Jogar Novamente" .  "</a>";
			}
	}

?>

</body>
</html>