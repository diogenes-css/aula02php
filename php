<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// $nome = "Diogenes";
// echo $nome;

//  array indexado
$frutas =["maca","banana","laranja"];
echo $frutas[1] . "<br>". "<br>";

//Array associativo
$idade =["Ana"=> 20, "Joao" => 25];
echo $idade["Joao"] . "<br>". "<br>";

// Arrya multidimensional
$alunos = [
[ "nome" =>  "Carlos", "nota" =>7],
[ "nome" => "Maria", "nota" => 9]
];
echo $alunos [1] ["nome"]. "<br>"; //Maria
?>
</body>
</html>
