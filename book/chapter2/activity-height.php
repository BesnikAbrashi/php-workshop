<?php

// get all arguments

$name = $argv[1];

$heightMeters = (int) $argv[2];

$heightCentimeters = (int) $argv[3];

// convert centimeters to meters

$cmToMeter = (float) ($heightCentimeters / 100);

$finalHeightInMeters = $heightMeters + $cmToMeter;

// display the output

echo $name . ': ' . $finalHeightInMeters . 'm';