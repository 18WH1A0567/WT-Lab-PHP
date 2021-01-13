<html>
    <body>
        <form method = "POST">
            Enter string: <input type="text" name="str"><br>
            Enter substring to find: <input type = "text" name = "substr"><br>
            <input type = "submit" value = "Submit">
        </form>
    </body>
</html>

<?php
    $str = $_POST["str"];
    $substr = $_POST["substr"];
    if(isset($substr) && isset($str)){
        if(strpos($str, $substr) !== false){
            echo "The string '" .$str. "' contains '" .$substr. "'.";
        }
        else{
            echo "The string '" .$str. "' does not contain '" .$substr. "'.";
        }
    }
   
?>
