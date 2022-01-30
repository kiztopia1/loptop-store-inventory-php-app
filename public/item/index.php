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
    <?php 
        $id = $_GET['id'];
        $items = find_item($id);
        echo mysqli_num_rows($items);
    ?>
    <?php include(SHARED_PATH. '/nav.php') ?>
    <h1>
    <?php while($item = mysqli_fetch_assoc($items)){ ?>
            <?php echo $item['name'] ?>
        <?php } ?>
    </h1>
</body>
</html>