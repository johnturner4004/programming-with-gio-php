<?php

// Integers

echo __LINE__ . '. ' . PHP_INT_MAX . '<br />';
echo __LINE__ . '. ' . PHP_INT_MIN . '<br />';

// decimal
$x = 42;

echo __LINE__ . '. ' . $x . '<br />';

// hexadecimal
$x = 0x2A;

echo __LINE__ . '. ' . $x . '<br />';

// octal
$x = 052;

echo __LINE__ . '. ' . $x . '<br />';

// binary
$x = 0b101010;

echo __LINE__ . '. ' . $x . '<br />';

// casting
$x = (int) 42;
$x = (integer) 42;

$x = (int) 42.9;

echo __LINE__ . '. ' . $x . '<br />';

$x = (int) '42.9';

echo __LINE__ . '. ' . $x . '<br />';

$x = (int) '42DDAFFA';

echo __LINE__ . '. ' . $x . '<br />';

$x = (int) 'forty-two';

echo __LINE__ . '. ' . $x . '<br />';

$x = (int) null;

echo __LINE__ . '. ' . $x . '<br />';

echo __LINE__ . '. ' . var_dump(is_int($x)) . '<br />';

$x = 42_000;

echo __LINE__ . '. ' . $x . '<br />';