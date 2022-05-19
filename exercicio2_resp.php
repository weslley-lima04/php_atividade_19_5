<?php 

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso/($altura*$altura);

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
 	echo "O seu imc é ".$imc.".<br/>";
    if ($imc>25)
    {
       echo "Você está acima do peso."."<br/>";
    } 
    else 
    {
       echo "Você está saudável.";
    }
    
	 ?>
 </script>
 </body>
 </html>