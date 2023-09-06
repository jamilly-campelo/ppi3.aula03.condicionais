<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias dos atletas por idade</title>
</head>
<body>
    <?php
        echo "<h1><b>Categorias dos atletas por idade</b></h1>";
        $idade = $_GET["age"];
        
        if($idade >= 12 && $idade <= 13){
            echo "Esse atleta está na categoria mirim";
        } else {
            if($idade == 14){
                echo "Esse atleta está na categoria infantil";
            } elseif($idade == 15){
                echo "Esse atleta pode estar nas categorias infantil ou infanto-juvenil";
            } elseif($idade == 16){
                echo "Esse atleta está na categoria infanto-juvenil";
            } elseif($idade >= 17 && $idade <= 18) {
                echo "Esse atleta pode estar nas categorias juvenil ou júnior";
            } elseif ($idade == 19) {
                echo "Esse atleta está na categoria júnior";
            } elseif ($idade == 20) {
                echo "Esse atleta pode estar nas categorias júnior ou sênior";
            } elseif ($idade > 20) {
                echo "Esse atleta está na categoria sênior";
            } else {
                echo "Essa pessoa provavelmente não está cadastrada no IFRN";
            }
        }
    ?>
</body>
</html>