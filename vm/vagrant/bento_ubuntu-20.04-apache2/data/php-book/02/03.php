
<?php
function counter()
{
    static $count = 0;
    $count += 1;
    return $count;
}

function br() { echo "</br>\n"; }

for($i = 0;$i < 10; $i++)
{
    print counter();
    br();
}

?>