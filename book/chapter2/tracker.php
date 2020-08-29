<?php

$name = (string) $argv[1];

$weightKg = (int) $argv[2];

$heightCm = (int) $argv[3];

// convert centimeters to meters

$heightM = (float) ($heightCm / 100);

$heightSquared = $heightM * $heightM;

$bmi = $weightKg / $heightSquared;

echo 'Hello ' . $name . ', your BMI is ' . $bmi;
