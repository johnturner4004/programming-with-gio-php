<?php

//Variable variables

$foo = 'bar';

$$foo = 'baz';

echo $foo, $bar; // also $$foo works too

// echo "{$$foo}"; use braces if in quotes
// echo "${$foo}"; or like this