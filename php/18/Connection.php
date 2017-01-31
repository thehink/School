<?php

declare(strict_types=1);

/**
 * This is the connection class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class Connection
{
    /**
     * Create a new connection instance.
     *
     * @return \PDO
     */
    public static function make(string $database): PDO
    {
        try {
            return new PDO(sprintf('mysql:host=127.0.0.1;dbname=%s', $database), 'root', 'root');
        } catch (PDOException $e) {
            die(var_dump($e->getMessage()));
        }
    }
}
