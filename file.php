<html>
    <body>
        <form method="POST">
             <input type="file" value = "Choose file" name="filename">
             <input value="Submit" type="submit">
        </form>

    </body>
</html>

<?php

    $filename = $_POST["filename"];
    if (isset($filename) ){
        $myfile = fopen($filename, "r") or die("Unable to open file!");
        $myfile1 = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile1, fread($myfile,filesize($filename)));
        fclose($myfile);
        fclose($myfile1);
        echo "Contents of " .$filename. " have been written to 'newfile.txt'";
    }
    
?>

