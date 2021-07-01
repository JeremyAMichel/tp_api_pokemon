<?php


class User
{
    private string $firstName;
    private string $lastName;
    private string $mail;

    /**
     * Pokemon constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $mail
     */
    public function __construct(string $firstName, string $lastName, string $mail)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->mail = $mail;
    }


    

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }
}