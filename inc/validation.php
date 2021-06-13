<?php


$error = '';
$success = '';


function requiredinput($value)
{
    $str = trim($value);
    if(strlen($str) > 0)
    {
        return true;
    }
    else
    {
        return false;
    }

}


// SANITAIZ STRING INPUTS
function santString($str)
{
    $str = trim($str);
    $str = filter_var($str,FILTER_SANITIZE_STRING);
    return $str;
}

// SANITAIZ EMAIL INPUTS
function santEmail($email)
{
    $email = trim($email);
    $email = filter_var($email,FILTER_SANITIZE_STRING);
    return $email;
}


// MINIMUM NUMBER

function minInput($value,$min)
{
    if(strlen($value) < $min)
    {
        return false;
    }
    else
    {
        return true;
    }
}

// MAXIMUM NUMBER

function maxInput($value,$max)
{
    if(strlen($value) > $max)
    {
        return false;
    }
    else
    {
        return true;
    }
}

// VALIDATE EMAIL 

function validateEmail($email)
{
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        return true;
    }
    else
    {
        return false;
    }
}
?>