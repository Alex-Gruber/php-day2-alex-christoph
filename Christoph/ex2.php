<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
   </head>
   <body>
       <form action="ex2.php" method ="POST">
           First Parameter: <input type="number"  name="par1" />
           Second Parameter: <input type ="number" name="par2" />
           <input  type="submit" name="submit"  />
       </form>
       <?php
       function division($par1,$par2)
       {
            $result = $par1 / $par2;
            echo $result;
       }
        if (isset($_POST['par1']) && isset($_POST['par2']))
        {
            if ($_POST['par2'] == 0)
            {
                echo "Divided by 0 error.";
            }
            else division($_POST['par1'],$_POST['par2']);
        }
       ?>
   </body>
</html>