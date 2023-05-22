<?php 
    $title= "Arrays and Printouts";
    include 'include/header.php' 
?>
    <h1><?php echo"$title"?></h1>
    <?php
        $num = 3;

        $numbers = [1,2,3,4,5,6,7,8,9,10,150,85,6,78,88,159,258,693];
        echo $numbers[5];
        echo "<p>$numbers[9]</p>";
        $size = count ($numbers);
        echo "<p> Array Numbers is size : $size</p>";

        for($count =0; $count < $size; $count++){
            echo "$numbers[$count] ";
        }
    ?>
<?php require 'include/footer.php' ?>