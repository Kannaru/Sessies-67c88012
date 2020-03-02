<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->
        <?php
        session_start();
        
        ?>
        
        <form action="cart.php" method="post">
            <input type="text" name="deinput" /> 
            <input type="submit" value="Verstuur" name="submit" />
        </form>
<?php
if(isset($_POST["submit"])) {
    if ($_POST["deinput"] > 3 || $_POST["deinput"] < 1) {
        echo "dit is geen geldig getal";
        exit();
        
    }
    $_SESSION["nummer"] = $_POST["deinput"];
    echo ("gekozen item : " . $_SESSION["nummer"]);  
}

?>
    </body>
</html>