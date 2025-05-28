<?php

$myName = "yan myo naing";

echo $myName;

echo strlen($myName);
echo "\n";
echo str_word_count($myName);
echo "\n";
echo strtolower($myName);
echo "\n";
echo strtoupper($myName);
echo "\n";
echo ucfirst($myName);
echo "\n";
echo ucwords($myName);
echo "\n";
echo strrev($myName);
echo "\n";
echo strpos($myName,"n");
echo "\n";
echo str_replace("myo","myat",$myName);
echo substr($myName,4,3);
echo mb_substr($myName,4,3); //myanmar language

echo str_pad($myName,15,"-",STR_PAD_LEFT);
print_r(explode(" ",$myName));

 