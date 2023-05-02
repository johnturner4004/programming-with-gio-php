<?php

// echo 'Hello world'; cannot be used inside expressions

// echo('Hello world'); works the same

// echo 'Hello', ' ', 'world'; will concatenate the strings

// print 'Hello world'; can be used inside expressions; has a return value of 1

// echo print 'Hello world'; //works, prints Hello world1

// print echo 'Hello world'; does not work

// echo is faster than print so use echo unless you need print

// assign string to variable
$name = 'John';
// variables must start with a letter or an underscore; cannot start with a number; no special characters

// print the variable
// echo $name;

echo "Hello {$name}"; // or echo 'Hello ' . $name