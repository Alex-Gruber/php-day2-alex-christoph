<?php
function grades($math,$physic,$eng) {
    $sum= $math+$physic+$eng;
    return $sum;
   
}


$totalValue = grades(5,4,3);

function average($math,$physic,$eng) {
        $average = ($math+$physic+$eng) / 3;
        return $average;
}

       $result = average(5,4,3);
echo "all grades are $totalValue </br>";
echo "the average is $result";
?>