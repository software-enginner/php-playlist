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
$videos = "https://www.youtube.com/watch?v=x4f32i5lYH0&list=PLDoPjvoNmBAwP0emFTIiCNcySKz-mlZj7";
$parsedvideos = parse_url($videos,PHP_URL_QUERY);
parse_str($parsedvideos,$myarray);
print_r($myarray);
echo '<iframe src="https://www.youtube.com/embed/".$myarray['v']."'>;

?>
</html>