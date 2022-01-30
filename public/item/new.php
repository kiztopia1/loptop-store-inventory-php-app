<?php include('../../private/initialize.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dagi computers | add new item </title>
</head>
<body>
    <?php include(SHARED_PATH. '/nav.php') ?>
    <h2>add new item</h2>

    <form action="">
    <div>
            <label for="name">item</label>
            <input type="text" id="name">
        </div>
        <div>
            <label for="manufacturer">manufacturer</label>
            <input type="text" id="manufacturer">
        </div>
        <div>
            <label for="barCode">barCode</label>
            <input type="text" id="barCode">
        </div>
        <div>
            <label for="agent name">agent name</label>
            <input type="text" id="agent name">
        </div>

        <button >add</button>
    </form>
</body>
</html>