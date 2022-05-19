<?php 

$lado1 = $_POST['num1'];
$lado2 = $_POST['num2'];

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
 	echo "O perímetro do retângulo é ".(2*$lado1 + 2*$lado2)."<br/>";
 	echo "A área do retângulo é ".(2*$lado1 * 2*$lado2);
	 ?>
 </script>
 </body>
 </html>