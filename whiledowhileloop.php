<?php
    $title = 'While / Do while Loop';
    include 'includes/header.php';
?>
    <?php
        echo "<h1>$title</h1>";
        $grade = 0;
        //Infinite Loop
        // while($grade < 10){
        //     echo '<p>I AM LESS THAN 10!</p>';
        // }
        //Pre-Condition Loop
        while($grade < 10){
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }
        echo 'EXIT LOOP!';
    ?>
    <?php
        echo '<h2>Do-While Loop</h2>';
        $grade = 0;
        //Post-Condition Loop
        do{
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;
        }while($grade < 10);
        echo 'EXIT LOOP!';
    ?>
<?php require 'includes/footer.php';?>