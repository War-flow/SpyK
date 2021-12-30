<?php 

class Hide
{
  public int $code;
  public string $address;
  public string $country;
  public string $type;


  public function __construct(int $code, string $address, string $country, string $type)
  {
    $this->code = $code;
    $this->address = $address;
    $this->country = $country;
    $this->type = $type;
  }
}