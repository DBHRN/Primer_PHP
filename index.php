<?php
    $title = 'Index';
    include 'includes/header.php';
?>
    <!-- Basic HTML -->
    <h1>Primer PHP</h1>
    <?php
        //Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>
    <?php
        //Declare variable
        $name = 'Harry Díaz';
        $age = 19;
        //Echo variable
        echo $name;
        echo '<h1>My name is: '.$name.' </h1>';
        echo '<h1>My age is: '.$age.' </h1>';
        //Echo using double quotes and interpolation
        echo "<h1>My name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
<?php require 'includes/footer.php';?>