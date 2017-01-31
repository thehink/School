<?php

declare(strict_types=1);

require __DIR__.'/Connection.php';
require __DIR__.'/QueryBuilder.php';

// First we create a new connection instance.
$pdo = Connection::make('pokemon');

// Then we pass it to our query builder.
$query = new QueryBuilder($pdo);

// Now we can fluently query our database :)
$pokemon = $query->select()->from('pokemon')->get();

printf('There are %d pokemon in the database.', count($pokemon));
$pokemon = $query->select()->from('pokemon')->limit(5)->get();

printf("\nLimit test: %d.\n", count($pokemon));

$pokemon = $query->select()->from('pokemon')->orderBy('name')->limit(3)->get();

print_r($pokemon);

$pokemon = $query->select()->from('pokemon')->orderBy('name', 'desc')->first();

echo $pokemon->name; // Zygarde

$pokemon = $query->select()->from('pokemon')->where('id', '=', '18')->first();

echo "\n". $pokemon->name; // Pidgeot
