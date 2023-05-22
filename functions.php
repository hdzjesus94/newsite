<?php 
    $title = "Functions";
    include 'include/header.php' ?>
    <h1>Functions</h1> 
    <?php
        function writeMesage(){
            echo"Nice person";
        }

        writeMesage();
        echo '<hr/>';
        writeMesage();
        echo '<hr/>';
        function addFunction($num1,$num2){
            $sum =$num1+$num2;
            echo "The sume of $num1 and $num2 is : $sum <br/>";

        }

        addFunction(15,22);

    ?>
<?php require 'include/footer.php' ?>
