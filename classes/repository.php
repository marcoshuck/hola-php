<?php

interface Repository
{
    public function get(int $id);
    public function getAll(int $limit, int $offset);
    public function create(User $entity);
    public function update(int $id, $entity);
    public function delete(int $id);
}