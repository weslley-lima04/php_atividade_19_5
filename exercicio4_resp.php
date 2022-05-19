<?php 

$novidades = $_POST["novidades"];
$email = $_POST['email'];
$nome = $_POST['nome'];
$telefone = $_POST['fone'];
$comentario = $_POST['mensagem'];
$rdo_btn = $_POST['avaliacao'];
$select = $_POST['opcoes'];
if (isset($rdo_btn))
{
    echo "Avaliação: ".$rdo_btn."<br/>";
}

if (isset($select))
{
    echo "Seção preferida : ".$select."<br/>";
}

echo "Comentário: ";
echo $comentario."<br/>";

echo "Contato:"."<br/>";
echo $nome."<br/>";
echo $email."<br/>";
echo $telefone."<br/>";

if (isset($novidades))
{
    echo "O usuário quer receber novidades via e-mail."."<br/>";
}

 ?>
