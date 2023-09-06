<?php

// Déclaration du tableau des recettes
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'enabled' => true,
    ],
    [
        'title' => 'Escalope Milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'enabled' => true,
    ],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <h1>Affichage des recettes</h1>
    <ul>
        <?php foreach($recipes as $recipe): ?>
            <li>
                <h3></h3><?php  echo $recipe['title'] . '<br>' .
                $recipe['recipe'] . '<br>' .
                $recipe['author'] . '<br>';?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>