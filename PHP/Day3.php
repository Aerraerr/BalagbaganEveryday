<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAY 3</title>
</head>
<body>
    <!--For inputing data-->
    <form action="" method="POST">
        <label for="Name">Name: </label>
        <input type="text" name="name" placeholder="Enter your name here.">
        <br>

        <label for="Age">Age: </label>
        <input type="number" name="age" placeholder="Enter your age here.">

        <br>
        <button type="submit">Submit</button>
    </form>
    <?php
    // User input and Output
    $name = $_POST['name'];
    $age = $_POST['age'];
    echo "Hello! <br> Your name: $name <br>";
    echo "Age: $age";
    
    ?>
</body>
</html>