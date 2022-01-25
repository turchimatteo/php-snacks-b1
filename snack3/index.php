<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
$random_number = [];
while ( count($random_number) < 15 ) {
    $new_random_number = rand(1, 100);

    if(!in_array($new_random_number, $random_number)) {
        $random_number[] = $new_random_number;
    }
}

var_dump($random_number);
?>