<?php

interface DirectorInterface {
  public function setDirector(string $name);
  public function getDirector() : string;
}

/**
 *
 */
class Episode implements DirectorInterface
{

  protected $title;
  protected $director;

  function __construct(string $title)
  {
    $this->title = $title;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function setDirector(string $director)
  {
    $this->director = $director;
  }

  public function getDirector() : string
  {
    return $this->director;
  }
}


$episode = new Episode('The Bicameral Mind');

$episode->setDirector('Jonathan Nolan');

printf('The episode %s was directed by %s.', $episode->getTitle(), $episode->getDirector());

// The episode The Bicameral Mind was directed by Jonathan Nolan.
