<?php

//validité d'une recette
function isValidRecipe(array $recipe) : bool {
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }
    return $isEnabled;
}

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


// Répond true !
$isCassouletValid = isValidRecipe($Cassoulet);
// Répond true !
$isEscalopeMilanaiseValid = isValidRecipe($EscalopeMilanaise);

?>

<?php

//récupérez les recettes valides
function getRecipes(array $recipes) : array {
    $validRecipes = [];
    foreach($recipes as $recipe) {
    if (isValidRecipe($recipe)) {
    $validRecipes[] = $recipe;
    }
    }
    return $validRecipes;

}
// construire l'affichage HTML des recettes
foreach(getRecipes($recipes) as $recipe) {
     echo $recipe['title']
}

?>

<?php
//affichez le nom de l'auteur
function displayAuthor(string $authorEmail, array $users) : string
{
    for ($i = 0; $i < count($users); $i++) {
        $author = $users[$i];
        if ($authorEmail === $author['email']) {
            return $author['full_name'] . '(' . $author['age'] . ' ans)';
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <h1>Liste des recettes de cuisine</h1>
    <ul>
        <?php foreach($recipes as $recipe): ?>
            
                <h2><?php  echo $recipe['title']?></h2>
                <p><?php echo $recipe['recipe']?> </p>
                <p><?php echo $recipe['author']?> </p>
                
            
        <?php endforeach; ?>
    </ul>
</body>
</html>