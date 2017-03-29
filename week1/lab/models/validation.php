<?php

function isZIPValid($zip)
{
 $zipRegex = '/^[0-9]{5}$/';
 if ( preg_match($zipRegex, $zip))
    {
        return true;
    }
    return false;  
}

function isDateValid($birthday)
{
    return (bool)strtotime($date);
}

function isEmailValid($email)
{
    
}