<?php

class User
{
    private string $id;
    private string $email;
    private string $password;
    private string $firstname;
    private string $lastname;
    private string $birth;
    private string $nation;
    private string $special;

    public function sayHello(): string
    {
        return 'Bonjour '.$this->firstname.' '.$this->lastname;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

}