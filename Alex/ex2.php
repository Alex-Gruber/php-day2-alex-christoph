<?php
function division($num1,$num2) {
  $sum = $num1 / $num2;
  return $sum;
}
$return_value = division(10, 5);
echo "Returned value from the function: $return_value <br />";

function div() {
    $num1=10;
    $num2=2;
    $result = $num1 / $num2;
    echo "the result is $result";
}
div();
?>