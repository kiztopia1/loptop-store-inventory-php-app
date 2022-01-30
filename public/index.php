<?php include('../private/initialize.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dagi-computers | system</title>
    <link rel="stylesheet" href="<?php echo WWW_ROOT. '/stylesheets/index.css' ?>">
</head>
<body>
    <?php include(SHARED_PATH. '/nav.php')?>
    <?php $items = find_all_items();
        $count = mysqli_num_rows($items);
        echo $count;
        
    ?>
    <div class="main">
        <div class="items">
            <table border="1">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>manufacturer</th>
                    <th>ram</th>
                </tr>
                <?php 
                
                
                while($item = mysqli_fetch_assoc($items)){ ?>
                    <tr>
                        
                    <td><a href=""><?php echo $item['id'] ?></a></td>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo $item['manufacturer'] ?></td>
                    <td><?php echo $item['ram'] ?></td>
                        
                    </tr>
                <?php } ?>
                

            </table>
        
    </div>
</body>
</html>