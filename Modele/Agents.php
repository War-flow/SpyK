<?php 

class Agents
{
  public int $codeId;
  public string $firstname;
  public string $lastname;
  public string $birth;
  public string $nation;
  public string $special;

  public function __construct(int $codeId, string $firstname, string $lastname, string $birth, string $nation, string $special)
  {
    $this->codeId = $codeId;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->birth = $birth;
    $this->nation = $nation;
    $this->special = $special;
  }
}