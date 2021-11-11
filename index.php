<?php
require_once 'Voiture.php';
require_once 'Bicycle.php';



$bike = new Bicycle('bleu');

echo $bike->forward();
echo PHP_EOL.'Vitesse du velo :' . $bike->setcurrentSpeed(15).' km/h'.PHP_EOL;
echo $bike->brake();
echo PHP_EOL.'Vitesse du vélo :'. $bike->setcurrentSpeed(15). ' km/h'. PHP_EOL;
echo $bike->brake();


$Cars = new Cars('rouge', 5, 50, 15, 45);

echo $Cars->forward();
echo PHP_EOL.'Vitesse de la voiture :' . $Cars->setCurrentSpeed(50).' km/h'.PHP_EOL;
echo $Cars->brake();
echo PHP_EOL.'Vitesse de la voiture :'. $Cars->setCurrentSpeed(50). ' km/h'. PHP_EOL;
echo $Cars->brake();


