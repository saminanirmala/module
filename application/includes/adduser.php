<?php
    /*** using if / else ***/
    if(isset($variable))
    {
        echo $variable;
    }
    else
    {
        echo '';
    }

    /*** using ternary ***/
    echo isset($variable) ? $variable : '';