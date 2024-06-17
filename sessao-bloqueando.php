<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bloqueando páginas por sessão</title>
	<?php
     session_start();

     $_SESSION['nome'] = $_POST['nome'];
     $_SESSION['senha'] = $_POST['senha'];

	?>



</head>
<body>
	<p>Funcionário: <br> <?php echo $_SESSION['nome'] ?> logado com sucesso </p>
	<p>Data da conexão <br> <?php echo date("d/m/Y")  ?> </p>
	<p>Hora da conexão <br> <?php echo date("H:i:s")  ?> </p>

</body>
</html>