<?php

/**
 *
 */
class Blog
{

  protected $posts;

  public function __construct(array $posts)
  {
    $this->posts = $posts;
  }

  public function publish(Post $post)
  {
    $this->posts[] = $post;
  }

  public function getPosts(): array
  {
    return $this->posts;
  }
}
