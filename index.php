<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1><?php
        echo "Hi I am Yan Yan"
    ?></h1>

    <p>
        <?= "Iam developer too" ?>
    </p>

    <?php if(false){ ?>
    <h1>It is True</h1>

    <?php } else{ ?>
<h1>It is false</h1>
        <?php } ?> -->


        <?php $fruits =array ("apple","banana","orange");?>
        <ul>
            <?php foreach($fruits as $fruit): ?>
                <li>
                    <?= $fruit ?>
                </li>
                <?php endforeach ?>
        </ul>
</body>
</html>