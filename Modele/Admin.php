<?php 

class Admin
{
  public string $firstname;
  public string $lastname;
  public string $email;
  public string $password;
  public string $creationDate;

  public function getFirstname(): string

  {
      return $this->firstname;
  }


  public function getLastname(): string

  {
      return $this->lastname;
  }

  public function getEmail(): string

  {
      return $this->email;
  }
  public function getPassword(): string

  {
      return $this->password;
  }
  public function getCreationDate(): string

  {
      return $this->creationDate;
  }

}