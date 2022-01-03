<?php 

class Admin
{
  public string $firstname;
  public string $lastname;
  public string $email;
  public string $password;
  public string $creationDate;

  public function __construct(string $firstname, string $lastname, string $email, string $password, string $creationDate)
  {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->password = $password;
    $this->creationDate = $creationDate;
  }
}