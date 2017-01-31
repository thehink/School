<?php

declare(strict_types=1);

/**
 * This is the query builder instance.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class QueryBuilder
{
    /**
     * The pdo instance.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * The sql query.
     *
     * @var string
     */
    protected $query;

    /**
     * Create a new query builder instance.
     *
     * @param PDO $pdo
     *
     * @return void
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Add select columns to table.
     *
     * @param array $columns
     *
     * @return self
     */
    public function select(array $columns = ['*']): self
    {
        $this->query = sprintf('SELECT %s', implode(', ', $columns));

        return $this;
    }

    /**
     * Limit returned rows
     * @param  int  $limit [description]
     * @return self        [description]
     */
    public function limit(int $limit): self
    {
      $this->query = sprintf('%s LIMIT %d', $this->query, $limit);

      return $this;
    }

  /**
   * [orderBy description]
   * @param  string $column [description]
   * @return self           [description]
   */
    public function orderBy(string $column, string $order = "ASC"): self
    {
      $this->query = sprintf('%s ORDER BY %s %s', $this->query, $column, $order);

      return $this;
    }

    /**
     * [where description]
     * @return self [description]
     */
    public function where(string $column, string $operator, string $value): self
    {
      $this->query = sprintf('%s WHERE %s %s %s', $this->query, $column, $operator, $value);

      return $this;
    }

    /**
     * Set the query table.
     *
     * @param string $table
     *
     * @return self
     */
    public function from(string $table): self
    {
        $this->query = sprintf('%s FROM %s', $this->query, $table);

        return $this;
    }

    /**
     * Prepare and execute the query.
     *
     * @return array
     */
    public function get(): array
    {
        $statement = $this->pdo->prepare($this->query);

        $statement->execute();

        if ($result = $statement->fetchAll(PDO::FETCH_CLASS)) {
            return $result;
        }

        return [];
    }

    public function first()
    {
      $statement = $this->pdo->prepare($this->query);
      $statement->setFetchMode(PDO::FETCH_CLASS, 'stdClass');
      $statement->execute();

      if ($result = $statement->fetch()) {
          return $result;
      }

      return;
    }
}
