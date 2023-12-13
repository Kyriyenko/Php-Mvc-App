<?php

namespace app\Models\Interfaces;

interface ModelInterface
{

    /**
     * @param int $id
     * @return array
     */
    public static function get(int $id): array;


    /**
     * @param array $params
     * @return object
     */
    public static function insert(array $params): object;


    /**
     * @param string $request
     * @return mixed
     */
    public static function select(string $request): mixed;


    /**
     * @param array $data
     * @return object
     */
    public static function update(array $data): object;


    /**
     * @param int $id
     * @return bool
     */
    public static function delete(int $id): bool;
}