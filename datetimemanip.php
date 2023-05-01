<?php
    $title = 'Date and Time Manipulation';
    include 'includes/header.php';
?>
    <?php
        echo "<h1>$title</h1>";
        $datenow = getdate();
        echo '<p>Today\'s Date: </p>';
        echo '<p>'.$datenow['mday'].'</p>';
        echo '<p>'.$datenow['mon'].'</p>';
        echo '<p>'.$datenow['year'].'</p>';
        echo '<p>Today\'s Date</p>';
        echo '<p>'.date('d/m/Y').'</p>';
        echo '<p>'.date('d-m-Y').'</p>';
        echo '<p>'.date('d.m.Y').'</p>';
        echo '<p>Today\'s Time</p>';
        echo '<p>'.date('h:i:sa').'</p>';
        $timestamp = mktime(10, 14, 54, 9, 10, 1981);
        echo '<p>Timestamp: '.$timestamp.'</p>';
        echo '<p>'.date('m/d/Y h:i:sa', $timestamp).'</p>';
        $timestamp2 = strtotime('7:00pm March 22 2016');
        echo '<p>'.date('m/d/Y h:i:sa', $timestamp2).'</p>';
        $timestamp3 = strtotime('tomorrow');
        echo '<p>'.date('m/d/Y h:i:sa', $timestamp3).'</p>';
        $timestamp4 = strtotime('next Sunday');
        echo '<p>'.date('m/d/Y h:i:sa', $timestamp4).'</p>';
        $timestamp5 = strtotime('+2 Months');
        echo '<p>'.date('m/d/Y h:i:sa', $timestamp5).'</p>';

        print date("m/d/Y G.i:s<br>", time())."<br>";
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time());

    ?>
<?php require 'includes/footer.php';?>