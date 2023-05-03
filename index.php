<?php

// Data types and type casting

  // 4 Scalar Types
    // bool
    $completed = true;
    // int
    $count = 75;
    // float also double
    $price = 1.75;
    // string
    $greeting = 'Hello, John';

    echo $completed . '<br />';
    echo $count . '<br />';
    echo $price . '<br />';
    echo $greeting . '<br />';

    echo gettype($completed) . '<br />';
    echo gettype($count) . '<br />';
    echo gettype($price) . '<br />';
    echo gettype($greeting) . '<br />';

    echo var_dump($completed) . '<br />';
    echo var_dump($count) . '<br />';
    echo var_dump($price) . '<br />';
    echo var_dump($greeting) . '<br />';

  // 4 compound types
    // array
    // object
    // callable
    // iterable

  // 2 special types
    // resource
    // null