<?php

$db = require(__DIR__ . '/db.php');
$db['dsn'] = 'mysql:host=localhost;dbname=yii2_basic_tests';

return $db;