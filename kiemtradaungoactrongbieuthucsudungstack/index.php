<?php

$string = "s * (s – a) * s – b) * (s – c)";


function check($string)
{
    $left = "(";
    $right = ")";
    $stackCheck = new SplStack();
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] === $left) {
            $stackCheck->push($left);
        } else if ($string[$i] === $right) {
            if ($stackCheck->isEmpty()) {
                return false;
            } else {
                $stackCheck->pop();
            }
        }  
    }
    if ($stackCheck->isEmpty()) {
        return true;
    } else {
        return false;
    }
}


var_dump(check($string));
