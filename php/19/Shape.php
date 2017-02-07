<?php

abstract class Shape
{
  const BLUE = 'blue';
  const RED = 'red';
  const GREEN = 'green';
  const YELLOW = 'yellow';

/**
 * [$color description]
 * @var [type]
 */
  protected $color;

/**
 * [getType description]
 * @return string [description]
 */
  public function getType(): string
  {
    return strtolower(get_class($this));
  }

/**
 * [getColor description]
 * @return string [description]
 */
  public function getColor(): string
  {
    return $this->color;
  }

/**
 * [setColor description]
 * @param string $color [description]
 */
  public function setColor(string $color): void
  {
    $this->color = $color;
  }

/**
 * [getArea description]
 * @return int [description]
 */
  abstract public function getArea(): int;

}
