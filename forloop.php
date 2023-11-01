<?php 
    $title = "For Loops";
    include 'include/header.php' ?>
<h1>Foor Loops</h1>
<?php
    for($count=0; $count<10; $count++)
        echo' <p> hello world </p>';
    
    for($count=0; $count<10; $count++)
        echo "<p>The Count is: $count</p>";

?>
<?php require 'include/footer.php' ?>