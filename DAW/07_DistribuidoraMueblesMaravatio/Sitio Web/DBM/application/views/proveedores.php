<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php foreach($css_files as $file): ?>
        <link rel="stylesheet" href="<?=$file;?>">
    <?php endforeach;?>

    <title><?=$titulo?></title>
</head>
<body>
    
    <?=$output;?>


    <?php foreach($js_files as $file): ?>
        <script src="<?=$file;?>"></script>
    <?php endforeach; ?>


</body>
</html>