<?php 

require '../bootloader.php';



$nav = [
    'left' => [
        ['url' => 'index.php', 'title' => 'Home'],
        ['url' => 'register.php', 'title' => 'Register'],
        ['url' => 'login.php', 'title' => 'Login'],
        ['url' => 'logout.php', 'title' => 'Logout']
    ]
];

$form = [
    'attr' => [
        //'action' => '', Nebūtina, jeigu action yra ''
        'method' => 'POST',
    ],
    'fields' => [
        'name' => [
            'label' => 'First name:',
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Type first name'
                ],
                'validators' => [
                    'validate_not_empty',
                ]
            ],
        ],
        'last' => [
            'label' => 'Last name:',
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Type last name'
                ],
                'validators' => [
                    'validate_not_empty',
                ]
            ],
        ],
         'password' => [
            'label' => 'Password:',
            'type' => 'password',
             'filter' => FILTER_SANITIZE_NUMBER_INT,
            'extra' => [
                'attr' => [
                    'placeholder' => 'Password'
                ],
                'validators' => [
                    'validate_not_empty',
                ]
            ],
        ],
        'email' => [
            'label' => 'Email adress:',
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Type email adress'
                ],
                'validators' => [
                    'validate_not_empty',
                    'validate_mail'
                ]
            ]
        ]
    ],
    'buttons' => [
        'create' => [
            'title' => 'Create',
            'extra' => [
                'attr' => [
                    'class' => 'red-btn'
                ]
            ]
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

function form_fail($filtered_input, &$form) {
    var_dump('Form failed!');
}

function form_success($filtered_input, &$form) {
    $newUser = new App\Users\User($filtered_input);
    $modelUsers = new App\Users\Model();
    $modelUsers->insert($newUser);
    var_dump($newUser);

}
//$model = new App\Users\Model();
//
//$a = $model->get(['name' => 'vytenis']);
//var_dump("model user:", $a);
function validate_mail($field_input, &$field) {
    $model = new App\Users\Model();
    $modelValid = $model->get(['email' => $field_input]);
    if($modelValid){
        $field['error'] = 'The user already exist!';
        return false;
    }
    return true;
}

$filtered_input = get_form_input($form);
if(!empty($filtered_input)){
    validate_form($filtered_input, $form);
}

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
