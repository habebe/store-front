
<?php
function doubler(&$value)
{
    $value = $value << 1;
    return $value;
}

function default_parameter($value = 2)
{
    return $value + 2;
}

function br() { echo "</br>\n"; }

for($i = 1;$i < 10;$i++)
{
    echo doubler($i);
    br();
    echo default_parameter();
    br();
}

?>