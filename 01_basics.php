<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momo</title>
</head>
<body>
    
    <div class="container">
        This id my php program
        <a href="https://www.sciencedirect.com/science/article/pii/S1359644621005456#b0060">link text</a>
        <br>
        <?php
                echo "hello world";
                // secret algo
        ?>
        <br>
        <?php
                echo "hello world again";
                $a=98;
                $b=67;
                echo $a;
                echo $b;
                echo $a+$b;
                echo "<br>";
                
                //operator
               // Arithmatic Operators
               echo "a+b=";
               echo $a+$b;
               echo $a-$b;
               echo $a*$b;
               echo $a/$b;
                //Assingment Operators
                //Comparison Operators
                //Increment/Decrement Operators
                //Logical Operators
                //INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'testname', '23', 'mail', 'this@this.com', '1234567890', 'this is my first data insertion', CURRENT_TIME());
        ?>
    </div>
</body>
</html>