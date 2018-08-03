<?php
require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates'); // pointe le chargement vers le dossier templates
$twig = new Twig_Environment($loader, array( // déclare l'environnement twig
    'cache' => false,
));
$faker = Faker\Factory::create('fr_FR'); // déclare faker 

// variable twig qui demande de charger l'index.html et rend un array avec des key = value faker
echo $twig->render('index.html', array( 
    'company' => $faker->company,
    'catchPhrase' => $faker->catchPhrase,
    'name' => $faker->name,
    'url' => $faker->url,
    'jobTitle' => $faker->jobTitle,
    ));





?>

