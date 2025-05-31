<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $products = [
            [
                "id"=>1,
                "name"=>"yanyan",
                "price"=>800,

            ],
            [
                "id"=>2,
                "name"=>"susu",
                "price"=>700,

            ],
            [
                "id"=>3,
                "name"=>"shine",
                "price"=>500,

            ],
            [
                "id"=>1,
                "name"=>"naing",
                "price"=>870,

            ]
            ];
            
    ?>
    <?php foreach ($products as $product)  : ?>
        <div>
            <h1>
                <?= $product["name"] ?>
            </h1>
            
        </div>
        <h4>
                <?= $product["price"] ?>

        </h4>
        <hr>

    <?php endforeach?>
</body>
</html>