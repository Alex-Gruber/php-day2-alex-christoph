<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
   </head>
   <body>
       <form action="ex4.php" method ="POST">
           Width: <input type="number"  name="width"  />
           Height: <input type ="number" name="height"  />
           Depth: <input type="number" name="depth"  />
           <input  type="submit" name="submit"  />
       </form>
       <?php
       function box($par1,$par2,$par3)
       {
            $box = array();
            $area = $par1 * $par2;
                array_push($box,$area);
            $volume = $area * $par3;
                array_push($box,$volume);
            return $box;
       }
       if (isset($_POST['width']) && isset($_POST['height']) && isset($_POST['depth']) && $_POST['width'] != "" && $_POST['height'] != "" & $_POST['depth'] != "")
        {
            $box = box($_POST['width'],$_POST['height'],$_POST['depth']);
            echo "The area of the box is: " . $box[0] . "<br>";
            echo "The volume of the box is: " . $box[1];
        }
       ?>
   </body>
</html>