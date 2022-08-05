<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "programmer";?></title>
</head>
<body>
    
</body>
<?php
/*
$names = array("taha","mouhamad","email","password");
$forbidenames = array("god","admin","root");
if(in_array("taha",$names)){
    echo "-your names is in array";
    echo "<br>";
    if(strlen("taha")>3){
        echo "-your name chracters more than 3";
        echo "<br>";
        if(!in_array("god",$forbidenames)){
            echo "congtas your name is not forbidden";
            echo "<br>";
        }
    }
}*/
$name = "taha kourani and iam programmer";
echo $name;

$age = 33;
//varibales = condition ? True :False;
$var = $age >30 ? "cool" : "soory";
echo "<br>";
echo $var;
if($age>20){
    echo "cool";
}
else{
    echo "soory";
}
?>
</html>