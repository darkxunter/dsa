<?php

$config = require __DIR__ . '/config.php';

for ($i = 0; $i < random_int($config['min'], $config['max']); $i++) {
    echo "DSA!\n";
}
