<?php

class User
{
  private string $password;
  private string $firstName;
  private string $lastName;


  public function getPassword(): string
  {
    return $this->password;
  }

  public function sayHello(): string
  {
    return 'Bonjour ' . $this->firstName . ' ' . $this->lastName;
  }
}
