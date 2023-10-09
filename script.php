<?php
//var_dump($_POST);

$paragraph = $_POST["paragraph"];

$paragraph_length = strlen($paragraph);

$badword = $_POST['badword'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>

<body>
    <p><?php echo $paragraph ?></p>
    <p>contiente <?php echo $paragraph_length ?> caratteri</p>
    <p><?php echo $badword ?></p>

</body>

</html>