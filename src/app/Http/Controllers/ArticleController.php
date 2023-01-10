<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ArticleController extends BaseController
{
    public function __construct(private ArticleRepository $articleRepository)
    {
    }

    /**
     * Get All Articles
     *
     * @param Request $request
     *
     * @return View
     */
    public function getList(Request $request): View
    {
        return view(
            'list',
            [
                'articles' => $this->articleRepository->getAll($request->all()),
                'categories' => DB::table('categories')->get(),
                // implement repo
            ]
        );
    }

    /**
     * Get Article Info
     *
     * @param Request $request
     *
     * @return View
     */
    public function getOne(Request $request): View
    {
        return view('article', ['article' => $this->articleRepository->getById($request->route('id'))]);
    }
}