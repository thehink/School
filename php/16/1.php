<?php

/**
 *
 */
class Person
{

  protected $name;

  function __construct(string $name)
  {
    $this->name = $name;
  }

  public function getName() : string
  {
    return $this->name;
  }

  public function setName(string $name)
  {
    $this->name = name;
  }
}

/**
 *
 */
class Employee extends Person
{

  protected $occupation;

  function __construct($name, $occupation = NULL)
  {
    parent::__construct($name);

    $this->occupation = $occupation;
  }

  public function getOccupation() : string
  {
    return $this->occupation;
  }

  public function setOccupation(string $occupation)
  {
    $this->occupation = $occupation;
  }
}

$employee = new Employee('Bernard Lowe');

$employee->setOccupation('programmer');

printf('The employee %s is a %s.', $employee->getName(), $employee->getOccupation());
