<?php

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

<?php

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
    //echo $recipe['title'];
    //echo $recipe['recipe'];
    //echo displayAuthor($recipe['author'], $users);
}

?>


<?php

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
                <p><?php echo displayAuthor($recipe['author'], $users)?> </p>
                
        <?php endforeach; ?>
    </ul>
</body>
</html>