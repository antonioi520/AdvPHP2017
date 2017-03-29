<?php

function readALLAddress()
{
    $db = dbconnect();
    $stmt = $db->prepare("SELECT * FROM address");
    
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    return $results;
}

/**
 * A method to add address data to the database.
 *    
 * @param String $fullname Name of person
 * @param String $email Email of person
 * @param String $addressline1 Address line 1 of person
 * @param String $city City of person
 * @param String $state State of person
 * @param String $zip Zip of person
 * @param String $birthday Birthday of person
 * @return boolean
 */
function createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday)
{
   $db = dbconnect();
    $stmt = $db->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip, birthday = :birthday");
    $binds = array(
        ":fullname" => $fullname,
        ":email" => $email,
        ":addressline1" => $addressline1,
        ":city" => $city,
        ":state" => $state,
        ":zip" => $zip,
        ":birthday" => $birthday,
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        return true;
    }
    
    return false;
}




