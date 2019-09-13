#!/usr/bin/php
<?php

use App\PrimeFactors;

require 'vendor/autoload.php';

echo 'Please input a number to be factored:';

$handle = fopen ("php://stdin","r");

$number = (int) fgets($handle);

$result = (new PrimeFactors)->calculate($number);

print implode(" ", $result) . "\n";
