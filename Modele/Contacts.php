<?php 

class Contacts
{
  public string $firstname;
  public string $lastname;
  public string $bith;
  public string $codeName;
  public string $nation;

  public function __construct(string $firstname, string $lastname, string $birth, string $codeName, string $nation)
  {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->birth = $birth;
    $this->codeName = $codeName;
    $this->nation = $nation;
  }
}