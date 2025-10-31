<?php
function say_hello()
{
    echo "こんにちは！PHP関数へようこそ。" . "<br>";
}
say_hello();
say_hello();

function greet_user($a)
{
    echo $a . "さん、ようこそ！";
}

greet_user("mako");

function calculate_tax($b)
{
$value = $b * 0.1;
return $value;
}
$tax = calculate_tax(5000);
echo $tax;

function calculate_total($c)
{
    $value = $c * 1.1;
    return $value;
}
$final_price = calculate_total(4500);

echo "税込み価格は" . $final_price . "円です";
