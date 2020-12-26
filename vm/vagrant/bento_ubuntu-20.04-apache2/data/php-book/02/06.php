
<?php
function br() { echo "</br>\n"; }

class A {}
class B extends A {}
class C {}

function myhandler(A $a,callable $callback = NULL)
{
    echo "Handling ".get_class($a)." fun\n";
    if($callback !== NULL)
    {
        $callback($a);
    }
}

$callback = function($b)
{
    echo "Callback invoked with value ";
    var_dump($b);
    br();
};

myhandler(new B);
myhandler(new B,$callback);

$myhandler_name = "myhandler";
if(function_exists($myhandler_name))
{
    $myhandler_name(new A);
}

function s_static()
{
    static $count = 0;
    $count += 1;
    echo "static-count:",$count;
    br();
}


for($i=0;$i<10;$i++)
{
    s_static();
}

?>