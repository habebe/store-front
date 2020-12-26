
<?php
function strcat($left,$right)
{
    $result = $left.$right;
    return $result;
}

function br()
{
    echo "</br>\n";
}

echo strcat("simple"," function");
br();

function doubler($value)
{
    return $value << 1;
}

echo "doubler(4) = ", doubler(4);
br();

var_dump(doubler(4));
br();


$a = 3;
function variable_scope()
{
    $a += 2;
    echo "local:", $a;
    br();
}

function global_scope()
{
    global $a;
    $a += 2;
    echo "global_scope:", $a;
    br();
}

variable_scope();
echo $a;
br();


global_scope();
echo $a;
br();
?>