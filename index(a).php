<?php
    $title = "Index";
    include 'include/header.php' 
?>
    <h1>Hello HTML PHP - Primer</h1>
    <br/>
    <?php
        $name = 'Jóse de Jesus';
        $age = '28';
        echo $name;
        echo'<h1>My name is: '.$name.'</h1>';
        echo"<h1>My Age is: $age</h1>";
        // Echo using double quotes and interpolation
    ?>
    <button type="button" class="btn btn-dark">Click me</button>
    <button type="button" class="btn btn-primary">Click me</button>
    <button type="button" class="btn btn-success">Click me</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>
<?php require 'include/footer.php' ?>


