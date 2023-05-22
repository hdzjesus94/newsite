<?php 
    $title="Strings";
    include 'include/header.php' 
?>
    <?php
        $phrase1 = "Students who came late";
        $phrase2 = "in class, stand with rock";
        $phrase3 = "jose de jesus";
        echo $phrase1. " named: Anita ".$phrase2;
        echo '<br/>';
        echo '<hr/>';
        echo 'Uppercase first letter :'. ucfirst($phrase3). '<br/>';
        echo 'Uppercase first letter of each word: '. ucwords($phrase3). '<br/>';
        echo 'Uppercase letters: '. strtoupper($phrase3). '<br/>';
        echo 'Uppercase letters: '. strtolower($phrase3). '<br/>';
        echo '<hr/>';
        echo 'Retepeat string: ' . str_repeat($phrase3,10) . '<br/>';
        echo 'Retepeat Upper string: ' . strtoupper(str_repeat($phrase3,10)) . '<br/>';
        echo 'Get a Subtring: ' . substr($phrase3, 3 ,6) . '<br/>';

        echo ' Get position of string : ' . strpos ($phrase3, 's') . ' <br/> ' ;
        
        echo ' Find Character "o": ' . strchr ($phrase3, 'o' ) . ' <br/> ' ;
        echo ' Find Character "e": ' . strchr ($phrase3, 'e' ) . ' <br/> ' ;
        echo ' Length ' . strlen ($phrase3) . ' <br/> ' ;


    ?>
<?php require 'include/footer.php'?>