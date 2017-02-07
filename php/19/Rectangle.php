<?php


/**
 *
 */
class Rectangle extends Shape {

  /**
   * [$width description]
   * @var [type]
   */
  protected $width;

  /**
   * [$height description]
   * @var int
   */
  protected $height;

  /**
   * [__construct description]
   * @param [type] $width  [description]
   * @param [type] $height [description]
   */
  function __construct(int $width, int $height)
  {
    $this->height = $width;
    $this->width = $height;
  }

  public function getArea(): int
  {
    return $this->width * $this->height;
  }
}
