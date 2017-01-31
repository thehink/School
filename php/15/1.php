<?php

declare(strict_types=1);

/**
 *
 */
class Actor
{

  public $firstName;
  public $lastName;

  function __construct(string $firstName, string $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  function getFullName(){
    return $this->firstName . " " . $this->lastName;
  }
}


$actor = new Actor('Finn', 'Wolfhard');

echo $actor->getFullName(); // Finn Wolfhard
