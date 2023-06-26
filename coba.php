<?php 

$buah = array('apel', 'mangga', 'pisang');
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="coba.php" method="get">
    <input type="text" name="nama">
    <button type="submit">submit</button>
   </form>
    <?php 
    foreach ($age as $key => $value) {
       echo "$key=$value";
    }
    ?>
</body>
</html>


