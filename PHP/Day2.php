<!--DAY2: VARIABLE AND DATA TYPES-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAY2</title>
</head>
<body>
    
<?php
    echo "DAY2: USING VARIABLES <br>";
    $showText = "This is 1st Variable";
    $showText2 = "This is 2nd Vairable";
    $variableUsed = $showText. "," . $showText2; //i used dot operator
 
    echo "Variable used was: $variableUsed <br>";
    echo "<br>";
    echo "OUTPUT1: $showText <br>";
    echo "OUTPUT2: $showText2 <br>";
    echo "<br>";
    echo "<br>";
    echo "VARIABE FOR SIMPLE ARITHMETIC <br>";
    // try using without function
    $A = 50;
    $B = 50;
    $C = 3;
    $D = 20;
    $add = $A + $B;
    $mul = $A * $C;


    // try using with function
    function showArith(){
        $A = 50;
        $B = 50;
        $C = 3;
        $D = 20;
        $add = $A + $B;
        $mul = $A * $C;
        $div = $A * $C / $C;
        $sub = $A * $C + $A - $D;

        echo "USING FUNCTION ARITHMETIC";
        echo "CHOICES: <br> A = $A <br> B = $B <br> C = $C <br> D = $D <br>";
        echo "<br>";
        echo "<br>";
        echo "EXAMPLES:<br>";
        echo "1. A + B = $add <br>";
        echo "2. A * C = $mul <br>";
        echo "3. A * C / C = $div <br>";
        echo "4. A * C + A - D = $sub <br>";
    }
    showArith();






?>
</body>
</html>