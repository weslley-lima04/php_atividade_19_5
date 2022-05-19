<?php 

$user = $_POST['user'];
$senha = $_POST['senha'];


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<?php 

    if ($user == "etecia" && $senha == "etecia238")
    {
      echo "Autenticação realizada com sucesso!";
    } 
    else 
    {
       echo "Você não tem permissão para visualizar essa página.";
    }
    
	 ?>
 </script>
 </body>
 </html>