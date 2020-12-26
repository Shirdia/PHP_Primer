
<?php 
    $title = "Array";
    include 'includes/header.php'

?>
    <h1> Welcome PHP-Primer</h1>
    <br/>

    <?php
        //HTML Echo
        echo "Hello PHP!";
        echo "<br/>"; 
        echo "Second Line";
        echo "<br/>";
 
        //Decalring & Echoing Varibales
        $name = "Kay Morgan";
        $age = 16;
        echo $name;
        echo '<h1>My Name is: '.$name.' </h1>';
        echo '<h1>My Age is: '.$age.' </h1>';
        //Echo using double quotes and interpolation
        echo "<h1> My Name is: $name </h1>";

    ?>
    <button type="button" class="btn btn-primary"> CLICK ME!</button>

<?php require 'includes/footer.php'  ?>