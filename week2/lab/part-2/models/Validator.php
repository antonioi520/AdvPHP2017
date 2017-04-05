<?php

/**
 * Description of Validator
 *
 * @author GFORTI
 */
class Validator {
    /**
     * A method to check if an email is valid.
     *
     * @param {String} [$email] - must be a valid email
     *
     * @return boolean
     */
    public function emailIsValid($email) 
    {
        return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false );
    }
    
    /**
     * A method to check if a phone number is valid.
     *
     * @param {String} [$phone] - must be a valid phone number
     *
     * @return boolean
     */
    public function phoneIsValid($phone) 
    {
        return ( preg_match("/^\(?([2-9]{1}[0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/", $phone) );
    }
    
    
   /**
     * A method to check if a zip code is valid.
     *
     * @param {String} [$zip] - must be a valid zip code (5 numbers)
     *
     * @return boolean
     */
    function isZIPValid($zip)
    {
        $zipRegex = '/^[0-9]{5}$/';
        if ( preg_match($zipRegex, $zip))
           {
               return true;
           }
           return false;  
    }

    /**
     * A method to check if a date is valid.
     *
     * @param {String} [$date] - must be a valid date
     *
     * @return boolean
     */
    function isDateValid($date)
    {
        return (bool)strtotime($date);
    }
}
