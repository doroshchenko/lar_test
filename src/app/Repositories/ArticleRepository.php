<?php

namespace App\Repositories;

use App\Models\Article;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ArticleRepository implements RepositoryInterface
{
    private string $table = 'articles';

    public function getAll(array $filter): Collection
    {
        $qb = DB::table($this->table);

        if (isset($filter['category']) && $filter['category']) {
            $qb->where('category_id', '=', $filter['category']);
        }

        $qb->orderBy('created_at', "DESC");

        return $qb->get();

    }

    public function getById(string $id): ?Article
    {
        return Article::find($id); //stdClass??
    }

    public function delete(string $id): bool
    {
        return true;
    }

    public function create(array $data): ?Article
    {
        return Article::create(
            [
                'name' => $data['name'],
                'category_id' => $data['category_id'],
                'description' => $data['description']
            ]
        );
    }

    public function update($id, array $data): ?Article
    {

    }
}