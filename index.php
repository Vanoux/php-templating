<?php
require_once './vendor/autoload.php'; 

$loader = new Twig_Loader_Filesystem('templates'); // pointe le chargement vers le dossier templates
$twig = new Twig_Environment($loader, array( // déclare l'environnement twig
    'cache' => false,
));
$faker = Faker\Factory::create('fr_FR'); // déclare faker 

// variable twig qui demande de charger l'index.html et rend un array avec des key = value(faker)
echo $twig->render('index.html', array( 
    'company' => $faker->company,
    'catchPhrase' => $faker->catchPhrase,
    'adjective' => $faker->word,
    'product' => $faker->text($maxNbChars = 15),
    'material' => $faker->text($maxNbChars = 10),
    'url' => $faker->url,
    'imgCard' => $faker->imageUrl($width = 200, $height = 200),
    'color' => $faker->colorName,
    'price' => $faker->randomDigitNotNull,
    'imgCircle' => $faker->imageUrl($width, $height),
    'name' => $faker->name,
    'jobTitle' => $faker->jobTitle,
    'email' => $faker->email,
    'phone' => $faker->phoneNumber,
    'adress' => $faker->streetAddress,
    'postCode' => $faker->postcode,
    'city' => $faker->city,   
    ));

?>

