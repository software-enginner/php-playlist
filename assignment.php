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
$names = "taha";
$age = 20;
echo $names;
echo "<br>";
echo gettype($names)."<br>";
echo gettype($age)."<br>";
if($names="mahmoud"){
  echo "";
}
else{
    echo "false the name is".$names;
}
if($age>20){
    echo "false your age is lower than 30".$age;
}
else{
    echo "my age is 20";
}

?>
</html>