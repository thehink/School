<?php

declare(strict_types=1);

include __DIR__ . '/Shape.php';
include __DIR__ . '/Rectangle.php';
include __DIR__ . '/Parallelogram.php';
include __DIR__ . '/Circle.php';

$rectangle = new Rectangle(5, 10);

$rectangle->setColor(Shape::BLUE);

printf(
    'The %s is %s and has an area of %d.',
    $rectangle->getType(),
    $rectangle->getColor(),
    $rectangle->getArea()
);

// The rectangle is blue and has an area of 50.


$parallelogram = new Parallelogram(5, 10);

$parallelogram->setColor(Shape::GREEN);

printf(
    'The %s is %s and has an area of %d.',
    $parallelogram->getType(),
    $parallelogram->getColor(),
    $parallelogram->getArea()
);

// The parallelogram is yellow and has an area of 50.

$circle = new Circle(25);

$circle->setColor(Shape::YELLOW);

printf(
    'The %s is %s and has an area of %d.',
    $circle->getType(),
    $circle->getColor(),
    $circle->getArea()
);

// The circle is yellow and has an area of 1963.
