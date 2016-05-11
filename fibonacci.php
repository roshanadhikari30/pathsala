<?php
/**
 * Created by PhpStorm.
 * User: roshan
 * Date: 5/11/16
 * Time: 12:14 PM
 */
    function fibonacci($n)
    {
       if ($n <=1)
           return $n;
       else
           $answer=fibonacci($n-1)+fibonacci($n-2);
            return $answer;
    }
    foreach (range(0,10) as $value)
        echo (fibonacci($value)).' ';

?>