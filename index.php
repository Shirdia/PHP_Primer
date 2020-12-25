<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    <h1> Index Page</h1>
    
    <h2> Example </h2>

    <ul>
        <li><a href="array.php">Simple Array </a></li>
        <li><a href="forloop.php">Simple For Loop </a></li>
        <li><a href="whiledowhileloop.php">Simple While/Do While Loop </a></li>
        <li><a href="ifstatement.php">simple If Statement  </a></li>
        <li><a href="switchstatement.php">Simple Switch Statement </a></li>
        <li><a href="stringmanip.php">Simple String Manipulation </a></li>
        <li><a href="datetimemanip.php">Simple Date and Time Manipulation </a></li>


    </ul>






    <h1> Hello World</h1>
    <br/>

    <?php
        //HTML Echo
        echo "Hello PHP!";
        echo "<br/>";
        echo "Second Line";
        echo "<br/>";
    ?>


<?php
        //Decalring & Echoing Varibales
        $name = "Kay Morgan";
        $age = 16;
        echo $name;
        echo '<h1>My Name is: '.$name.' </h1>';
        echo '<h1>My Age is: '.$age.' </h1>';

    ?>

</body>
</html>