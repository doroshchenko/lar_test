<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface RepositoryInterface {
    public function getAll(array $params): Collection;
    public function getById(string $id): ?Model;
    public function delete(string $id): bool;
    public function create(array $data): ?Model;
    public function update(string $id, array $data): ?Model;
}
