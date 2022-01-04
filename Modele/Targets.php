<?php 

class Target
{
  public string $firstname;
  public string $lastname;
  public string $birth;
  public string $codeName;
  public string $nation;

  public function getFirstname(): string

  {
      return $this->firstname;
  }


  public function getLastname(): string

  {
      return $this->lastname;
  }

  public function getBirth(): string

  {
      return $this->birth;
  }
  public function getCodename(): string

  {
      return $this->codename;
  }
  public function getNation(): string

  {
      return $this->nation;
  }
}