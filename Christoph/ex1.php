<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
   </head>
   <body>
       <form action="ex1.php" method ="POST">
           Name: <input type="text"  name="name" />
           Surname: <input type ="text" name="surname" />
           <input  type="submit" name="submit"  />
       </form>
       <?php
       if( isset($_POST['submit']))
       {
            if (isset($_POST['name']) && isset($_POST['surname']) && $_POST['name'] != "" && $_POST['surname'] != "")
                {
                    echo "Welcome " . $_POST['name'] . " " . $_POST['surname'] . "!";
                }
            else if (isset($_POST['name']) && $_POST['name'] != "")
                {
                    echo "Please insert your surname";
                }
            else echo "Please insert your name";
       }
       ?>
   </body>
</html>