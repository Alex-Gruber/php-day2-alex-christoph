<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
   </head>
   <body>
       <form action="ex5.php" method ="POST">
           Minutes: <input type="number"  name="minutes"  />
           <input  type="submit" name="submit"  />
       </form>
       <?php
       function hoursandminutes($min)
       {
            $hours = intdiv($min,60);
            $minutes = $min % 60;
            echo $min . " Minutes = " . $hours . " hours and " . $minutes . " minutes.";
       }
       if (isset($_POST['minutes']) && $_POST['minutes'] != "")
        {
            hoursandminutes($_POST['minutes']);
        }
       ?>
   </body>
</html>