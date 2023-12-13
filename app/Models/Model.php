<?php

namespace app\Models;

use App\Models\Interfaces\ModelInterface;

class Model implements ModelInterface
{
    public function create()
    {
        dd(1111);
    }




    public static function insert(array $params): object
    {
        // TODO: Implement insert() method.
    }

    public static function select(string $request): mixed
    {
        // TODO: Implement select() method.
    }

    public static function update(array $data): object
    {
        // TODO: Implement update() method.
    }

    public static function delete(int $id): bool
    {
        // TODO: Implement delete() method.
    }

    public static function get(int $id): array
    {
        // TODO: Implement get() method.
    }
}