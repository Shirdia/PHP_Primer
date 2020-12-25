<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>
<body>
    <h1>String Manipulation</h1>
    
    <?php
    
//Concatenation of Strings
    $phrase1 = "Late Bugs";
    $phrase2 = "Early Bugs";
    $name = "kay morgan";
    echo $phrase1 . ", named Juliet," . $phrase2;
    echo '<br/>';

    //String Transformed.
    echo 'Upper first letter: ' . ucfirst($name). '</br>';
    echo 'Upper first letter of each word: ' . ucwords($name). '</br>';
    echo 'Upper case: ' . strtoupper($name). '</br>';
    echo 'Lower case: ' . strtolower($name). '</br>';
    echo 'Lower case: ' . strtolower("THIS WAS ALL UPPER CASE") . '</br>';
    echo '<hr/>';
    echo 'Repeat String: ' . str_repeat('a', 10) . '<br/>';
    echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a', 10)) . '<br/>';
    echo 'Get a Substring: ' . strchr($name, 3, 5). '</br>';

    //Returns NULL
    //echo 'Get Position of string: ' . strpos($name, 'w'). '<br/>';
    echo 'Find Character "R": ' . strchr ($name, 'R'). '<br/>';
    echo 'Find Character "r": ' . strchr ($name, 'r'). '<br/>';
    echo 'Find Character "s": ' . strchr ($name, 's'). '<br/>';
    echo 'Find Character "e": ' . strchr ($name, 'e'). '<br/>';

    echo 'Find Length of String: '. strlen($name) . '<br/>';

    echo 'Without Trim: '. "A" . " B C D " . " E " . '<br/>';
    echo 'Trim:  spaces on both sides: '.  "A" . trim("B C D ") . " E " . '<br/>';
    echo 'Trim:  spaces to the left: '.  "A" . ltrim("B C D ") . " E " . '<br/>';
    echo 'Trim:  spaces to the right: '.  "A" . rtrim("B C D ") . " E " . '<br/>';

    echo ' Replace string with another: '. str_replace("stand", "sit", $phrase2 ) . '<br/>';
    

?>
    

</body>
</html>