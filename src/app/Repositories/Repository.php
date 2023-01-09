<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Repository implements RepositoryInterface
{
    private string $table;

    public function __construct(string $table)
    {
        $this->table = $table;
    }

    /**
     * Get entity collection
     *
     * @param array $params
     *
     * @return Collection
     */
    public function getAll(array $params): Collection
    {
        $qb = DB::table($this->table);

        [$filter, $orderBy, $offset, $limit] = $params;

        foreach ($filter as $key => $value) {
            $qb->where($key, '=', $value);
        }

        $orderBy && $qb->orderBy($orderBy, "DESC");

        // add offset limit
        
        return $qb->get();

    }
    public function getById($orderId): ?Model
    {
        return DB::table($this->table)->find($orderId);
    }

    public function delete($orderId)
    {

    }

    public function create(array $orderDetails)
    {

    }

    public function update($orderId, array $newDetails)
    {

    }
}