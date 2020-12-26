<?php 
    $title = "While Loop";
    include 'includes/header.php' 
?>
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

<?php require 'includes/footer.php'  ?>