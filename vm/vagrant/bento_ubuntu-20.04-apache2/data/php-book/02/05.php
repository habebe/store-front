
<?php
function countList()
{
    if(func_num_args() == 0)
    {
        return 0;
    }
    else
    {
        $count = 0;
        for($i = 0;$i < func_num_args(); $i++)
        {
            $count += func_get_arg($i);
        }
        return $count;
    }
}

function default_parameter($value = 2)
{
    return $value + 2;
}

function br() { echo "</br>\n"; }

for($i = 1;$i < 10;$i++)
{
    echo default_parameter();
    br();
}

for($i = 0;$i < 10;$i++)
{
    echo "count-list:",countList($i,$i+1,$i+2);
    br();
}

?>