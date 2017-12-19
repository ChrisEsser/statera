<?php

// load environment file
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
try {
    $dotenv = new Dotenv\Dotenv(dirname(dirname(__FILE__)));
    $dotenv->load();
} catch (Exception $e) {
    exit('Unable to load .env file.');
}


// load pdo
$dsn = "mysql:host=" . getenv('DB_HOST') . ";dbname=" . getenv('DB_NAME');
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, getenv('DB_USER'), getenv('DB_PASSWORD'), $opt);


// get the data
$coinData = file_get_contents('https://api.coinmarketcap.com/v1/ticker');
$coinData = json_decode($coinData);


// setup the query
$stmt = $pdo->prepare('UPDATE investments SET last_value = ?, last_update = ? WHERE short_name = ? AND invetment_type_id = 1');


// iterate the data
foreach ($coinData as $coin) {
    $stmt->execute([$coin->price_usd, date("Y-m-d H:i:s", $coin->last_updated), $coin->symbol]);
}