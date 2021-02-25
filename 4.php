<!-- 4- write a script to draw the multiplication table -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment-4</title>
</head>
<body>

  
    <?php
        echo "<table >";
        for ($i=1; $i <=12 ; $i++) { 
            for ($x=1; $x <=12 ; $x++) { 
            $result =$i * $x ;
            echo "$i * $x = $result <br>";
            }
            echo "<hr>";
        }

    echo" </table>";

    ?>
</body>
</html>