<?php

/**
 *
 */
class Collection implements Countable
{

  protected $items;

  function __construct(array $items = [])
  {
    $this->items = $items;
  }

  public function count() : int
  {
    return count($this->items);
  }
}

$actors = new Collection([
    'Anthony Hopkins',
    'Evan Rachel Wood',
    'Jeffrey Wright',
]);

printf('There are %d actors in this collection.', count($actors));

// There are 3 actors in this collection.
