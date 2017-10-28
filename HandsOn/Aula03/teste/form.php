<!DOCTYPE html>
<html>
<head>
	<title>500</title>
</head>
<body>

<h1 style="""class = "">Meu formulario:</h1>

<form action="processaForm.php" method="POST">
	<p>
		<label>Nome:</label>
		<input type="" placeholder='Nome' name="nome">
	</p>
	<p>
		<label>Email:</label>
		<input type="email" placeholder='email@email.com' name="email">
	</p>
		<p>
		<label>Senha:</label>
		<input type="password" name="senha">
	</p>
		<input type="submit" value="Enviar">
		<input type="reset" value="Reset">
</form>



<?php 

if ($_POST)
{
	var_dump($_POST);
	var_dump($_POST);
	echo $_POST['nome'] . '<br>';
	echo $_POST['email'];



?>

</body>
</html>
