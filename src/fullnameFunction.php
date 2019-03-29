<?php


function fullname($lastname,$firstname)
{
    $res=strtoupper($lastname).' '.ucwords($firstname);
    return trim($res);
}