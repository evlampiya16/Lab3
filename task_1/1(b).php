<?php

echo preg_replace_callback('#(\d+)#', 'degree', 'a1b2c3');
function degree($matches)
{
    $NewNum = pow($matches[0], 3);
    return $NewNum;
} 