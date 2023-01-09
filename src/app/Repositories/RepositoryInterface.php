<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface RepositoryInterface {
    public function getAll(array $params): Collection;
    public function getById(string $orderId): ?Model;
    public function delete(string $orderId): boolean;
    public function create(array $orderDetails): ?Model;
    public function update($orderId, array $newDetails): ?Model; //return entity Id
}
