<html>
    <body>
        <form method = "POST">
            Enter string: <input type="text" name="str"><br>
            <input type = "submit" value = "Submit">
        </form>
    </body>
</html>

<?php 
    $str = $_POST["str"];
    if(isset($str)){
        $l = strlen($str);
        echo "Length of '" .$str. "' is " .$l. ".";
        $w = str_word_count($str);
        echo nl2br("\nNumber of words in '" .$str. "' is " .$w. ".");
        $rev_str = strrev($str);
        echo nl2br("\nReverse of string '" .$str. "' is '" .$rev_str. "'.");
    }
    
    
?>
