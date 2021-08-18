<?php
$string = "s * (s – a) * s – b) * (s – c)";
$string1 = "s * (s – a) * (s – b * (s – c) ";
$string2 = "s * (s – a) * s – b) * (s – c) ";
$string3 = "(– b + (b^2 – 4*a*c)^(0.5/ 2*a))  ";

function check($string)
{
    $stack = new SplStack();
    $left = "(";
    $right = ")";
    for ($i = 0 ; $i < strlen($string) ; $i++) {
        if ($string[$i] === $left) {
            $stack->push($left);
        }elseif ($string[$i] === $right) {
            if ($stack->isEmpty()) {
                return false;
            }else {
                $stack->pop();
            }
        }
    }
    if ($stack->isEmpty()) {
        return true;
    }else {
        return false;
    }
}

var_dump(check($string));
echo "<br>";
var_dump(check($string1));
echo "<br>";
var_dump(check($string2));
echo "<br>";
var_dump(check($string3));
