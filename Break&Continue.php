<?php
for($a=1;$a<=10;$a++)
{
    if($a==3)
    {
        continue;
    }
    if($a==8)
    {
        break;
    }
    echo $a . "<br>";
}

?>