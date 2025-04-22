<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day4</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <th><label for="">Enter 1st number: <input type="number" name="num1" plaholder="1-1000"> </label></tr>
            <th><label for="">Enter 2nd number: <input type="number" name="num2" plaholder="1-1000"></label></tr>
        </table>
        <br>
        <button type="submit">Solve!</button>


    </form>
    <?php
    // ARITHMETIC OPERATIONS
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $answer = $num1 - $num2;

    echo '<label>Answer: <input type="text" value="'. $answer .'" readonly ></label>';

    

    ?>
</body>
</html>