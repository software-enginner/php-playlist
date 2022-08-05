<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
$dir = __DIR__ .'/New folder/';
$exts = array("php","html");
foreach(scandir($dir) as $file){
    if(pathinfo($file,PATHINFO_EXTENSION) === 'php'){
      include $dir.$file;
      echo "good the  app is already has been decleared";
    }
    else{
        echo "hello from php my name is taha and iam programmer and also i have more than 200 proj github";
    }
}
?>
</html>