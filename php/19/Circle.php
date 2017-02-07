<?php

/**
 *
 */
class Circle extends Shape
{

  /**
   * [$radius description]
   * @var [type]
   */
  protected $radius;


/**
 * [__construct description]
 * @param int $radius [description]
 */
  public function __construct(int $radius)
  {
    $this->radius = $radius;
  }

/**
 * [getArea description]
 * @return int [description]
 */
  public function getArea(): int
  {
    return pow($this->radius, 2) * pi();
  }

}
