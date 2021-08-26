<?php

class UserRepository implements Repository
{
    private $conn;

    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;

        if ($this->conn->connect_error) {
            die("Connection failed: {$this->conn->connect_error}");
        }

        $this->conn->query("CREATE TABLE IF NOT EXISTS users");
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function get(int $id)
    {
        $result = $this->conn->query("SELECT * FROM users WHERE id = {$id}");
    }

    /**
     * @param int $limit
     * @param int $offset
     * @return mixed
     */
    public function getAll(int $limit, int $offset)
    {
        $result = $this->conn->query("SELECT * FROM users OFFSET {$offset} LIMIT {$limit}");
    }

    /**
     * @param $entity
     * @return mixed
     */
    public function create(User $entity)
    {
        $result = $this->conn->query("INSERT INTO users (first_name, last_name) VALUES ({$entity->getFirstName()}, {$entity->getLastName()})");
    }

    /**
     * @param int $id
     * @param $entity
     * @return mixed
     */
    public function update(int $id, $entity)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }
}