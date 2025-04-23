<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAY5: STRING MANIPULATION</title>
</head>
<body>
<!--
1.Display a simple string message.
2.Store your full name in a variable and print it.
3.Get the length of a string (e.g., a sentence).
4.Convert a string to all uppercase.
5.Convert a string to all lowercase.
6.Capitalize the first letter of a string.
7.Capitalize the first letter of every word in a string.
8.Count the number of words in a sentence.
9.Reverse a string.
10.Replace a word in a sentence with another word.
-->
    <form action="" method="post">
    <label for="">Enter your name: <input type="text" name="word"></label>
    <button type="submit">ENTER!</button>
    </form>
    <br>


    <?php
    // string manipulation





    if(isset($_POST['word'])){
        $word = $_POST['word'];
        $length = strlen($word);
        $ucase = strtoupper($word);
        $lcase = strtolower($word);
        $fupcase = ucfirst($word);
        $flocase = lcfirst($word);
        $count = str_word_count("$word");
        $rev1 = strrev("$word");

        echo "
        <table>
                <tr>
                    <td>ENTERED NAME: </td>
                    <td>$word</td>
                </tr>
                <tr>
                    <td>STRING LENGTH: </td>
                    <td>$length</td>
                </tr>
                <tr>
                    <td>UPPER CASE: </td>
                    <td>$ucase</td>
                </tr>
                <tr>
                    <td>LOWER CASE: </td>
                    <td>$lcase</td>
                </tr>
                <tr>
                    <td>CAPITALIZED 1: </td>
                    <td>$fupcase</td>
                </tr>
                <tr>
                    <td>CAPITALIZED 2: </td>
                    <td>$flocase</td>
                </tr>
                <tr>
                    <td>WORD COUNT: </td>
                    <td>$count</td>
                </tr>
                <tr>
                    <td>STRING REVERSE: </td>
                    <td>$rev1</td>
                </tr>

        </table>
        ";
    }
    ?>
</body>

</html>