<!DOCTYPE html>
<?php session_start(); ?>
<html>

	<head>
		<title>Gerenciador de Tarefas</title>
	</head>

	<body>
		<h1>Gerenciador de Tarefas</h1>

		<form>
			<fieldset>
				<legend>Nova Contato:</legend>
				<label>
					Nome:
					<input type="text" name="nome" />
				</label>
				<br>
				<br>
				<label>
					Telefone:
					<input type="text" name="telefone" />
				</label>
				<br>
				<br>
				<label>
					E-mail:
					<input type="text" name="email" />
				</label>
				<br>
				<br>
				<input type="submit" name="Cadastrar" />
			</fieldset>
		</form>

		<?php

			if((isset($_GET['nome']))  || (isset($_GET['telefone'])) || (isset($_GET['email'])) ){
				$_SESSION['lista_nome'][] = $_GET['nome'];
				$_SESSION['lista_tel'][]  = $_GET['telefone'];
				$_SESSION['lista_eml'][]  = $_GET['email'];
			}

			$lista_nome = array();
			$lista_tel  = array();
			$lista_eml  = array();

			if((isset($_GET['nome'])) || (isset($_GET['telefone'])) || (isset($_GET['email'])) ){
				$lista_nome = $_SESSION['lista_nome'];
				$lista_tel = $_SESSION['lista_tel'];
				$lista_eml = $_SESSION['lista_eml'];
			}

			
		?>

		<br>

		<table border="1">
			<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Telefone</th>
			</tr>

			<?php $i = 0; ?>
			<?php foreach ($lista_nome as $nome) : ?>
				<tr>
					<td><?php echo $nome; ?></td>
					<td><?php echo $lista_eml[$i]; ?></td>
					<td><?php echo $lista_tel[$i]; ?></td>
					<?php $i++ ;?>
				</tr>
			<?php endforeach; ?>
			<br>
		</table>
	</body>
</html>