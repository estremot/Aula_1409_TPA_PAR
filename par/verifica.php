<?php
    $n1 = $_GET['num'];

    if($n1 % 2 == 0){
        $resposta = 'PAR';
    }
    else{
        $resposta = 'impar';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Resposta</title>
</head>
<body>
    <h1>Resposta:</h1>
    <?php if($n1 % 2 == 0){
    ?>
    <p class="alert alert-primary">
        O valor <?php echo($n1); ?> É <?php echo($resposta); ?>
    </p>
    <?php
    }
    else{
    ?>
     <p class="alert alert-success">
        O valor <?php echo($n1); ?> É <?php echo($resposta); ?>
    </p>
    <?php
    }
    ?>
</body>
</html>
