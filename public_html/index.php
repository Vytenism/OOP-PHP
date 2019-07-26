<?php
require '../bootloader.php';

use App\Drinks\Drink;

$nav = [
    'left' => [
        ['url' => '/', 'title' => 'Home'],
    ]
];
class Game {
    public $score;
    
    public function __construct() {
        $this->score = 0;
    }
}

class Player {
    public function __construct(Game $game) {
        $game->score--;
    }
}
$game = new Game();
$player1 = new Player($game);
$player2 = new Player($game);
var_dump($game);

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

    </body>
</html>
