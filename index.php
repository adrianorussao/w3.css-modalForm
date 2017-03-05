<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORM + W3.CSS</title>
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
</head>
<body>
<!-- Meu form-->
	<div class="w3-content w3-container w3-blue" style="width: 500px;">
  		<h2>Meu Form</h2>
	</div>

	<form action="#" class="w3-content w3-container" style="width: 500px;">
  		<p>
 		<label>Nome</label>
 		<input id="nome" class="w3-input" type="text" name="nome">
 		</p>
  		<p>
  		<button onclick="abreModal()" class="w3-button">Abrir Modal</button>
  		</p>
</form>

<!-- Meu modal-->
<div id="meumodal" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="fechaModal()" class="w3-closebtn">&times;</span>
      	<?php
      		$nome= $_GET['nome'];
			echo $nome;
		?>
    </div>
  </div>
</div>

<!-- funções-->
<script>
	function abreModal() {
		var nome = document.getElementById('nome').value;
		document.getElementById('meumodal').style.display='block';
	}
	function fechaModal() {
		document.getElementById('meumodal').style.display='none';
	}
</script>
</body>
</html>