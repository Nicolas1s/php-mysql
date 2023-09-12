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
            
                <h2><?php  echo $recipe['title']?></h2>
                <p><?php echo $recipe['recipe']?> </p>
                <p><?php echo $recipe['author']?> </p>
                
            
        <?php endforeach; ?>
    </ul>
</body>
</html>