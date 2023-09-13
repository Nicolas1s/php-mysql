<?php>

// Déclaration du tableau des recettes

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'enabled' => true,
    ],
    [  
        'title' => 'Escalope Milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'enabled' => true,
    ],
];

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
];

// Répond true !
$isCassouletValid = isValidRecipe($recipes);
// Répond true !
$isEscalopeMilanaiseValid = isValidRecipe($recipes);

?>