
<?php
require '../vendor/autoload.php';


$array = [1, "apple", 2, "foo", "bar"];
var_dump($array);

use Medoo\Medoo;

// Initialize
$database = new Medoo([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
    ]);