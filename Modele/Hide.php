<?php 

class Hide
{
  public int $code;
  public string $address;
  public string $country;
  public string $type;

  public function getCode(): string

  {
      return $this->code;
  }

  
  public function getAddress(): string

  {
      return $this->address;
  }


  public function getCountry(): string

  {
      return $this->country;
  }

  public function getType(): string

  {
      return $this->type;
  }
}