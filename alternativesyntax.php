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
$number = array(1,2,3,4,5,6,7,8,9,0);
foreach($number as $num):
    if($num<10):
        echo '0'.$num.'<br>';
    else:
        echo $num . '<br>';
        if($num !==0){
   echo ''.$num.'<br>';
        }
        
    endif;
    endforeach

?>
</html>