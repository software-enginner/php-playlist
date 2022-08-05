<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "develloper";?></title>
</head>
<body>
      
</body>
<?php
$starttime = microtime(true);
echo $starttime;
$range = range(1,100000);
echo "<pre>";
print_r($range);
$endtime = microtime(true);
echo $endtime;
$timeTaken = $endtime - $starttime;
echo $timeTaken;
$timeTaken = round($timeTaken,5);
echo "page generated in".$timetaken."seconds";
?>;

</html>