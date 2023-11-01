<?php 
     $title ="IF - ELSE Statements";
     include 'include/header.php' 
?>
<h1> IF - ELSE Statements </h1>
<?php
       // An If statement that will carry out an action based on the value of the variable .
       echo '<h2> If Statement </h2>';
       $grade = 80 ;
    
       if($grade>=50)
            echo'<h3 style="color:green"> YOU HAVE PASSED </h3>';
       else{
            echo'<h3 style="color:red"> YOU HAVE FAILED </h3>';
        }
       $grade =' C ';
       if ($grade == ' A ' ){
         echo'<h2 style = " color:green">YOU ARE SUPERSTAR!</h2>';   
       }elseif ($grade ==' B '){
        echo '<h2 style = " color : blue " > YOU DID WELLI </h2>';
       }elseif ($grade ==' C '){
        echo '<h2 style = " color : silver " > YOU CAN DO IT BETTER </h2>';
       }
?>
<?php require 'include/footer.php' ?>