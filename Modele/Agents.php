<?php 

class Agents
{
  public int $codeId;
  public string $firstname;
  public string $lastname;
  public string $birth;
  public string $nation;
  public string $special;

  public function getCodeId(): string

  {
      return $this->codeId;
  }

  
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

  public function getNation(): string

  {
      return $this->nation;
  }

  public function getSpecial(): string

  {
      return $this->special;
  }
}