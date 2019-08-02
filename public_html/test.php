<?php
require '..\bootloader.php';

$nav = [
    'left' => [
        ['url' => 'index.php', 'title' => 'Home'],
        ['url' => 'register.php', 'title' => 'Register'],
        ['url' => 'login.php', 'title' => 'Login'],
        ['url' => 'logout.php', 'title' => 'Logout'],
        ['url' => 'drinks.php', 'title' => 'Drinks'],
        ['url' => 'test.php', 'title' => 'Test']
    ]
];
$form = [
    'attr' => [
//'action' => '', Nebūtina, jeigu action yra ''
        'method' => 'POST',
    ],
    'fields' => [
        'name' => [
            'label' => 'Name',
            'type' => 'text',
            'extra' => [
                'validators' => [
                    'validate_not_empty',
                ]
            ],
        ],
    ],
    'buttons' => [
        'submit' => [
            'title' => 'Register',
            'extra' => [
                'attr' => [
                    'class' => 'red-btn'
                ]
            ]
        ]
    ],
    'callbacks' => [
//                'success' => 'form_success',
//                'fail' => 'form_fail'
    ],
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

    </body>
</html>

