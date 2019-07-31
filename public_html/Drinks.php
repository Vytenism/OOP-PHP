<?php

require '../bootloader.php';

$nav = [
    'left' => [
        ['url' => 'index.php', 'title' => 'Home'],
        ['url' => 'register.php', 'title' => 'Register'],
        ['url' => 'login.php', 'title' => 'Login'],
        ['url' => 'logout.php', 'title' => 'Logout'],
        ['url' => 'drinks.php', 'title' => 'Drinks']
    ]
];

$drink1 = new App\Drinks\Drink([
                'name' => 'Whiskey',
                'amount_ml' => 700,
                'abarot' => 40,
                'image' => 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1552420125-jamesiw-1080x-1552420117.jpg'
            ]);
$drink2 = new App\Drinks\Drink([
                'name' => 'Beer',
                'amount_ml' => 500,
                'abarot' => 4.8,
                'image' => 'https://cdn1.wine-searcher.net/images/labels/46/05/10944605.jpg'
            ]);
$model = new App\Drinks\Model();
$Drinks = $model->get();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">        
        <script defer src="media/js/app.js"></script>
    </head>
    <body>
<?php require ROOT . '/app/templates/navigation.tpl.php'; ?>

        <div class="content">
<?php require ROOT . '/core/templates/form/form.tpl.php'; ?>
        </div>
        <div>
            <?php foreach($Drinks as $drink_id => $drink): ?>
            <h1><?php print $drink->getName(); ?></h1>
            <img src="<?php print $drink->getImage(); ?>" alt="">
            <h2><?php print $drink->getAmount(); ?> ml</h2>
            <h2><?php print $drink->getAbarot(); ?> %</h2>
            <?php endforeach; ?>
        </div>
    </body>
</html>