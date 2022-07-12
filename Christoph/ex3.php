<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
   </head>
   <body>
       <form action="ex3.php" method ="POST">
           Math Grade: <input type="number"  name="math" min="1" max="5" />
           Physics Grade: <input type ="number" name="physics" min="1" max="5" />
           English Grade: <input type="number" name="english" min="1" max="5" />
           <input  type="submit" name="submit"  />
       </form>
       <?php
       function sum($par1,$par2,$par3)
       {
            $result = $par1 + $par2 + $par3;
            echo "Sum: " . $result . "<br>";
       }
       function average($par1,$par2,$par3)
       {
            $result = ($par1 + $par2 + $par3) / 3;
            echo "Average: " . $result;
       }
       if (isset($_POST['english']) && isset($_POST['physics']) && isset($_POST['math']))
        {
            sum($_POST['math'],$_POST['physics'],$_POST['english']);
            average($_POST['math'],$_POST['physics'],$_POST['english']);
        }
       ?>
   </body>
</html>