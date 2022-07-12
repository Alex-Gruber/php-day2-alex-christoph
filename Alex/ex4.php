<html>  
<body>  
<form method = "post">   
Width: <input type="number" name="width">   
<br><br>   
Length: <input type="number" name="length"> <br>   
<input type = "submit" name = "submit" value="Calculate">   
</form>   
</body>   
</html>  
<?php   
if(isset($_POST['submit']))  
    {   
$width = $_POST['width'];   
$length = $_POST['length'];   
$area = $width*$length;   
echo "The area of a rectangle with $width x $length is $area</br>";   
}   
?>   

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
   </head>
   <body>
       
       <?php
      

        function rectangle($num1,$num2,$num3)
        {
            $sum = $num1 * $num2;
            return  $sum;
        }
        $return_value = rectangle(3,3,3);
        echo "the area is: $return_value</br>";

        function volume($num1,$num2,$num3)
        {
            $sum = $num1 * $num2 *$num3;
            return  $sum;
        }
        $return_value = volume(3,3,3);
        echo "the volume is: $return_value";
       ?>
       
   </body>
</html>