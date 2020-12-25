<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While/Do-While Loops</title>
</head>
<body>
    <h1> While Loop</h1>

    <?php
        $grade =0;
        //Infinite Loop
        //while($grade < 10){
          //  echo '<p> LESS THAN 10!</P>';
        //} 

        $grade =0;
        while($grade < 10){
            echo '<p> VALUE IS LESS THAN 10!</P>';
            $grade++;
        } 

        echo 'EXIT LOOP!';
    ?>



    <h1>DO-While Loop</h1>

    <?php
        //Post Conditon Loop
        $grade = 0;
        do{
            echo '<p> DO WHILE LOOP</>';
            $grade++;
        }while($grade <10);

        echo 'EXIT LOOP!';

    ?>

</body>
</html>