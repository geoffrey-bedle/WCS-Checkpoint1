<?php


function activeClass($str)
{
    if (strstr($_SERVER['REQUEST_URI'],$str)){
        echo 'active';
    }
}