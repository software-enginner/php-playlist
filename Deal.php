<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?PHP echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="username">
        <br>
        <input type="checkbox" name="browser[]" value="chrome">Chrome<br>
        <input type="checkbox" name="browser[]" value="firefox">firefox<br>
        <input type="checkbox" name="browser[]" value="opera">opera<br>
        <input type="checkbox" name="browser[]" value="tor">tor<br>
        <input type="submit" value="send">
    </form>
</body>
<?php
/*
PHP VERSION :5.5.19;
LESSON NAME : INSERT MULTIPLE CHEKBOXES IN ONE FILD
DIFFICULTY : MEDIUM
WHAT WE WILL USE : IMPLODE()AND EXPLODE()
AUTHOR : ELZERO WWEB SHOLL

*/
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo $_POST['username']."<br>";
    $allbrowsers = implode(',',$_POST['browser']);
    echo $allbrowsers;
    foreach( $_POST['browser'] as $b){
        echo $b;
    }

}
?>
</html>