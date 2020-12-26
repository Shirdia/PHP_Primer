<?php 
    $title = "For Loop";
    include 'includes/header.php' 
?>
<body>
    <h1> For Loops</h1>

     <?php 
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD</p>';
        }

        for($count = 0; $count < 10; $count++){
            echo "<p>The Count is: $count</p>";
        }


?>
<?php require 'includes/footer.php'  ?>