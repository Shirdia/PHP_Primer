<?php 
    $title = "Switch Statement";
    include 'includes/header.php' 
?>
    <h1> Switch Statement</h1>
    <?php
        $grade = 'A';

        switch($grade){
            case 'A';
                echo '<h2 style="color: green"> YOU ARE SMART!</h2>';
                break;
            case 'B';
                echo '<h2 style="color: blue"> WELL DONE! </h2>';
                break;
            default;
                echo '<h2 style="color: red"> SORRY YOU FAILED! </h2>';
                break;

                

                
        }


?>


<?php require 'includes/footer.php'  ?>