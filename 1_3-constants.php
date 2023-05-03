<?php

//Constants

// define('name', 'value');

// common naming convention is use UPPERCASE for constanta

define('STATUS_PAID', 'paid');

// const 'STATUS_PAID' = 'paid';

echo STATUS_PAID;

// echo defined('STATUS_PAID'); returns 1 if defined

//Dynamic constants
//  $paid = 'PAID';
// define('STATUS_' . $paid, 'paid');
// echo STATUS_PAID; prints paid

// echo PHP_VERSION; php has some predefined constants

// echo __LINE__; php has some magic constants whose values change. This one prints what line of code you're on
