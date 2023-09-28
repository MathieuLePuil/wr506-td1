<?php

//$file = file_get_contents('');
//file_put_contents('img.png', $file);

$cacheFile = 'countries.json';
$cacheTime = 3600; // Durée de vie du cache en secondes

if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
    $data = file_get_contents($cacheFile);
} else {
    $ch = curl_init('https://restcountries.com/v3.1/all');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    file_put_contents($cacheFile, $data);
}

if (isset($_GET['id'])) {
    $countries = json_decode($data, true);
    $id = $_GET['id']; // Définissez la variable $id en dehors de la fonction anonyme
    $filteredCountries = array_filter($countries, function ($country) use ($id) {
        return $country['cca3'] === $id;
    });

    // Prenez le premier pays du tableau filtré
    $countryData = reset($filteredCountries);

    $data = json_encode($countryData);
}



header('Content-Type: application/json');
echo $data;
