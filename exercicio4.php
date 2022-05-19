<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<script type="text/javascript">
	function limpar_form()
	{
		document.getElementById("form_avaliacao").reset();
	}
</script>

</head>
<body>
  <form id="form_avaliacao"  method="POST" action="exercicio4_resp.php">
  	<label>O que você achou do site?</label><br><br>
  	<input type="radio" id="mb" value="Muito Bom" name="avaliacao">
  	<label for="mb">Muito bom</label>
  	<input type="radio" id="b" value="Bom" name="avaliacao">
  	<label for="b">Bom</label>
  	<input type="radio" id="r" value="Regular" name="avaliacao">
    <label for="r">Regular</label>

    <br><br>
     <label>De qual seção você gostou mais?</label><br><br>
     <select id="opcoes" name="opcoes">
     	<option value="1">Em cartaz</option>
     	<option value="2">Fora de cartaz</option>
     	<option value="3">A lançar</option>

     </select>
     <label>Outra:</label>
     <input type="text" name="outra_opcao"><br><br>

     <label>Deixe abaixo seu comentário:</label><br>
     <textarea name="message" rows="5" cols="30"> 	

     </textarea><br><br>

     <label>Diga-nos como entrar em contato com você:</label>
     <br><br>
     <div>Nome</div>
     <input type="text" name="nome"><br><br>
     <div>E-mail</div>
     <input type="text" name="email"><br><br>
     <div>Telefone</div>
     <input type="text" name="fone"><br><br>	


     <input type="checkbox" name="novidades">
     Quero receber as novidades por e-mail
     <br><br>
     <input type="submit" name="Enviar">
     <input type="button" name="Limpar" onclick="limpar_form()" value="Limpar">
  </form>

</body>
</html>