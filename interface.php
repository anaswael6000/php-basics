<!DOCTYPE html>
<html lang="en">
    <head>
        <title>index.html</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
    interface test {
        function makesound($name);
    }
    class animals implements test {
        function makesound($name){
            if ($name == "cat"){
                echo "Meo" . "<br>";
            }
            elseif ($name == "dog"){
                echo "HoHo" . "<br>";
            }
            else{
                echo "hello world" . "<br>";
            }
        }
    }

    $cat = new animals();
    $dog = new animals();
    $donkey = new animals();

    $cat->makesound("cat");
    $dog->makesound("dog");
    $donkey->makesound("dfnaf");

    
    ?>
    </body>
</html>
