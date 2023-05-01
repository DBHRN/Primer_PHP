<?php
    $title = 'If Statements';
    include 'includes/header.php';
?>
    <?php
        echo "<h1>$title</h1>";
        $grade = 50;
        // ===, ==, >, <, <=, >=
        if($grade >= 50){
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }
        $grade = 'A';
        //If-Else If-Else
        if($grade == 'A'){
            echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2 style="color: blue">YOU DID WELL!</h2>';
        }
        else{
            echo '<h2 style="color: red">YOU HAVE FAILED...</h2>';
        }
    ?>
<?php require 'includes/footer.php';?>