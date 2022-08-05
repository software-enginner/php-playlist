<?php
function setactive($name='home'){
    global $pagename;
    if(isset($pagename) && $pagename == $name){
        echo "class='active'";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($pagename)){echo $pagename;}?></title>
    <style>
        .active{
            color:red;
            font-weight:bold
        }
    </style>
</head>
<body>
    <ul>
        <li><a <?php  setactive('about')?> <?php if($pagename == 'about'){echo 'class="active"';}?> href="about.php">about</a></li>
        <li><a <?php  setactive('services')?><?php if($pagename == 'services'){echo 'class="active"';}?> href="services.php">services</a></li>
        <li><a <?php setactive('map')?><?php if($pagename == 'map'){echo 'active';}?> href="map.php">map</a></li>
        <li><a <?php setactive('tuts')?><?php if($pagename == 'tuts'){echo 'active';}?> href="tuts.php">tuts</a></li>
    </ul>
</body>
<?php

?>
</html>