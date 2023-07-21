<?php

namespace App;

use Exception;

class LRUCache
{
    public LinkedList $data;
    private int $count = 0;

    public function __construct(int $cacheSize)
    {
        if ($cacheSize <= 1000) {
            $this->data = new LinkedList($cacheSize);
        } else throw new Exception("Maximum cache size exceeded");
    }

    public function set(string $key, mixed $data): bool
    {
        $this->data->insertFirst($key, $data);

        return true;
    }

    public function get(string $key): bool | null
    {
        
        return true;
    }

    public function remove(string $key)
    {

    }

    public function count(): int
    {
        return $this->count;
    }
}
