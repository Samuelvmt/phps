<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página WEB - sessão do usuário</title>
</head>
<body>
	<?php
    session_start();

   // $_SESSION['nome'] = "Administrador";

//session_unset();
//session_destroy();
?>

<h3>sessão do usuário</h3>
Bem vindo, Sr. <?php echo session_id(); ?>
</body>
</html>