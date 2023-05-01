<?php
    $title = 'For Loop';
    include 'includes/header.php';
?>
    <?php
        echo "<h1>$title</h1>";
        for($count = 0; $count < 10; $count++){
            echo '<p>Hello World</p>';
        }
        for($count = 0; $count < 10; $count++){
            echo "<p>The count is: $count</p>";
        }
    ?>
<?php require 'includes/footer.php';?>