<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário - PHP</title>
</head>
<body>
	<form action="recebe.php" method="post">
		O que você gosta de fazer?
		<br><br>
		<input type="checkbox" name="escolher[]" value="Pescar"> Pescar <br>
		<input type="checkbox" name="escolher[]" value="Correr"> Correr <br>
		<input type="checkbox" name="escolher[]" value="Estudar"> Estudar <br>
		<input type="checkbox" name="escolher[]" value="Ler"> Ler <br>
		<input type="checkbox" name="escolher[]" value="Nadar"> Nadar <br><br>	

		Sexo: <br /><br />

		<input type="radio" name="sexo" value="fem"> Feminino <br /><br />
		<input type="radio" name="sexo" value="masc"> Masculino <br /><br />

		Selecione o estado: <br /><br />
		<select name="estados" id="est">
			<option value="sp">São Paulo</option>
			<option value="rj">Rio de Janeiro</option>
			<option value="mg">Minas Gerais</option>
			<option value="bh">Bahia</option>
		</select>

		 <br /><br />

		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="limpar" value="Limpar">

	</form>

</body>
</html>