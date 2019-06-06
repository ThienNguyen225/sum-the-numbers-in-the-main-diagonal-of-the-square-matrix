<?php
$array = array(
    [100, 1, 2, 3, 5],
    [3, 5, 1, 0, 8],
    [3, 5, 6, 1, 2],
    [3, 8, 3, 9, 1],
    [3, 2, 3, 9, 10]
);
function sumDiagonalLine($array){
    $sum = 0;
    for ($i = 0; $i < count($array); $i++){
        for ($j = 0; $j < count($array); $j++){
            if ($i == $j){
                $sum += $array[$i][$j];
            }
        }
    }
    return $sum;
}
echo "Sum of Diagonal Line is: ".sumDiagonalLine($array);
?>