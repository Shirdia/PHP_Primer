<?php 
    $title = "If Statement";
    include 'includes/header.php' 
?>
    <h1> IF Statement</h1>
    <h3 style="color: red"></h3>
    <?php 
        echo '<h2>If Statement</h2>';

        $grade = 50;

        if($grade >= 50){
            echo '<h3 style="color: green"> YOU PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red"> YOU FAILED</h3>';

        }
        $grade = 'A';
        if ($grade == 'A'){
            echo '<h2 style="color: green"> YOU ARE SMART!</h2>';
        }
        elseif ($grade == 'B'){
            echo '<h2 style="color: blue"> WELL DONE! </h2>';
        }  
        else{
            echo '<h2 style="color: red"> SORRY YOU FAILED! </h2>';
        }



    ?>
<?php require 'includes/footer.php'  ?>