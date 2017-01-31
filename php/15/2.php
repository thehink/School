<?php

declare(strict_types=1);

/**
 *
 */
class Episode
{

  protected $id;
  protected $title;
  protected $season;

  function __construct(int $id, string $title)
  {
    $this->id = $id;
    $this->title = $title;
  }

  function setSeason(int $season) : void
  {
    $this->season = $season;
  }

  function getId() : int
  {
    return $this->id;
  }

  function getTitle() : string
  {
    return $this->title;
  }

  function getSeason() : int
  {
    return $this->season;
  }
}


$episodes = [
    new Episode(1, 'The Vanishing of Will Byers'),
    new Episode(2, 'The Weirdo on Maple Street'),
    new Episode(3, 'Holly, Jolly'),
    new Episode(4, 'The Body')
];

foreach ($episodes as $episode) {
    $episode->setSeason(1);

    echo sprintf("Episode %d (%s) is from season %d\r\n", $episode->getId(), $episode->getTitle(), $episode->getSeason());
}
