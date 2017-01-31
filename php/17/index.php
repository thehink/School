<?php
declare(strict_types=1);

require_once __DIR__ . '/Author.php';
require_once __DIR__ . '/Post.php';
require_once __DIR__ . '/Blog.php';


$author = new Author('Arnold Schwarzenegger');

$blog = new Blog([
    new Post('Traveling Through Time', $author),
    new Post('How to Successfully Fight the Resistance', $author),
]);

$post = new Post('Smiling 101', $author);

$blog->publish($post);

printf("There are %d posts published by %s:\n", count($blog->getPosts()), $author->getName());

foreach ($blog->getPosts() as $post) {
    printf("- %s\n", $post->getTitle());
}

// There are 3 posts published by Arnold Schwarzenegger:
// - Traveling Through Time
// - How to Successfully Fight the Resistance
// - Smiling 101
