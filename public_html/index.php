<?php
require '../bootloader.php';

abstract class Car {

    protected $manufacturer;
    protected $model;
    protected $year;

    abstract protected function drive();

    public function __construct($manufacturer, $model, $year) {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->year = $year;
    }

}

abstract class Honda extends Car {

    protected $manufacturer = 'Honda';

    public function __construct($model, $year) {
        parent::__construct('Honda', $model, $year);
    }

}

class HondaCivic extends Honda {

    public function __construct($year) {
        parent::__construct('Civic', $year);
    }

    public function drive() {
        print 'Civicas juda';
    }

}

//$honda = new HondaCivic(2001);
//var_dump($honda);
//$Whiskey = new \App\Drinks\StrongDrink([
//                'name' => 'Whiskey',
//                'amount_ml' => 700,
//                'abarot' => 40,
//                'image' => '.png'
//            ]);
//$Whiskey->drink();
//var_dump($Whiskey->getAmount());
//$image = 'https://morebeer-web-8-pavinthewaysoftw.netdna-ssl.com/product_image/morebeer/500x500/27498.png';
$test = new \App\Drinks\LightDrink();
$test2 = new \App\Drinks\StrongDrink();
$ab2 = $test2->getImage();
//$test->setImage($image);
$ab = $test->getImage();


$nav = [
    'left' => [
        ['url' => 'index.php', 'title' => 'Home'],
        ['url' => 'register.php', 'title' => 'Register'],
        ['url' => 'login.php', 'title' => 'Login'],
        ['url' => 'logout.php', 'title' => 'Logout']
    ]
];
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
            <img src="<?php print $ab; ?>" alt="">
            <img src="<?php print $ab2; ?>" alt="">
        </div>
    </body>
</html>
