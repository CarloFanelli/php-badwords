<?php
//var_dump($_POST);

$paragraph = $_POST["paragraph"];

$paragraph_length = strlen($paragraph);

$badword = $_POST['badword'];

// use str_replace
$final_text = str_replace($badword, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>

<body>

    <p>testo non censurato : <?php echo $paragraph ?></p>
    <p>contiente <?php echo $paragraph_length ?> caratteri</p>
    <p>parola da censurare: <?php echo $badword ?></p>

    <p>testo censurato :</p>
    <p><?php echo $final_text ?></p>

</body>

</html>