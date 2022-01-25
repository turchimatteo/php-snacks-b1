<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 -->
<?php 
    $partite = {
        [
            "squadra-casa" => "Olimpia Milano",
            "squadra-ospite" => "Cantù",
            "punteggio-casa" => 55,
            "punteggio-ospite" => 60,
        ];
        [
            "squadra-casa" => "Virtus",
            "squadra-ospite" => "Dinamo",
            "punteggio-casa" => 58,
            "punteggio-ospite" => 40,
        ];
    };
    var_dump ($partite["squadra casa"] - $partite["squadra-ospite"] | $partite["punteggio"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php for($i = 0; $i < count($partite); $i++) { ?>
        <?php $partita = $partite[$i]; ?>

        <div>
            <?php echo $partita['squadra-casa']; ?> - <?php echo $partita['squadra-ospite']; ?> 
            | 
            <?php echo $partita['punteggio-casa']; ?>-<?php echo $partita['punteggio-ospite']; ?>
        </div>
    <?php } ?>
</body>
</html>