<?php include('../../private/initialize.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $items = find_all_items();
        $count = mysqli_num_rows($items);
        echo $count;
    ?>
    <?php include(SHARED_PATH. '/nav.php') ?>

</body>
</html>