<html>
    <body>
        <form method="POST">
            Enter range from 1 to : <input type="number" name = "endNumber"><br>
            <input value="submit" type="submit">
        </form>
    </body>
<html>
<?php

    
    function isPrime($n){
        for($i = 2; $i < $n; $i++){
            if($n % $i == 0){
                return FALSE;
            }
        }
        return TRUE;
    }
    
    
    $number = $_POST["endNumber"];
    if(isset($number)){
        echo nl2br("Prime numbers between the range 1 to " .$number. " are: \n");
        for($i = 2; $i <= $number; $i++){
            if( isPrime($i)){
                echo $i." ";
            }
        }
    }
   
?>
