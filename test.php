<?php

function bitch($value)
{
    if ("integer" === gettype($value)) {
        echo "yes" . "<br/>";
    } else {
        echo "no" . "<br/>";
    }
    print_r($value);
    echo "$value[0]" . "<br/>";
}

$meat = array(32, 1, 5);
bitch($meat);

bitch("chi");