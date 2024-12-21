<?php

class User
{

    //Attributes
    private $id;
    private $full_name;

    private $username;
    private $password;

    //Getters

    function getId()
    {
        return $this->id;
    }

    function getFullName()
    {
        return $this->full_name;
    }

    function getUsername()
    {
        return $this->username;
    }



    //Verify the password, pass in the the password for verification.
    function verifyPassword(string $password)
    {
        return password_verify($password, $this->password);
    }
}



?>