<?php

//Validate Zip (5 numbers)
function isZIPValid($zip)
{
 $zipRegex = '/^[0-9]{5}$/';
 if ( preg_match($zipRegex, $zip))
    {
        return true;
    }
    return false;  
}

//Validate date 
function isDateValid($date)
{
    return (bool)strtotime($date);
}

function isEmailValid($email)
{
    
}