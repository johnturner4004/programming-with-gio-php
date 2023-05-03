<?php

// Booleans

$isComplete = true; // case insensitive

if ($isComplete) {
  // do something
} else {
  // do something else
}

// The following all evaluate to false:
  // int 0 or -0
  // float 0.0 or -0.0
  // string ''
  // string '0'
  // array []
  // null

function test($input) {
  if ($input) {
    echo 'success' . '<br />';
  } else {
    echo 'fail' . '<br />';
  }
}

test($isComplete);
test(!$isComplete);
test(0);
test(5);
test([]);

echo $isComplete . '<br />';
var_dump($isComplete);
echo '<br />';

$isComplete = false;

echo $isComplete . '<br />';
var_dump($isComplete);
echo '<br />';

var_dump(is_bool($isComplete));

$isComplete = (string) false;

echo $isComplete . '<br />';
var_dump($isComplete);
echo '<br />';

var_dump(is_bool($isComplete));