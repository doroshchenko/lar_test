<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Repositories\RepositoryInterface;

class ArticleController extends BaseController
{
    public function __construct(private RepositoryInterface $repository)
    {

    }

    # use php8 Attributes
    /**
     * Get All Articles
     *
     * @param Request $request
     *
     * @return View
     */
    public function getList(Request $request): View
    {
        // param validation

        return view(
            'article-list',
            [
                // implement parameter parse // table name mapping
                'articles' => $this->repository->getAll($request->all()),
                // implement repository
                'categories' => DB::table('categories')->get(),
            ]
        );
    }

    /**
     * Get Article Info
     *
     * @param Request $request
     * @return View
     */
    public function getOne(Request $request): View
    {
        return view('article', ['article' => DB::table('categories')->find($request->route('id'))]); // implement repository
    }

    /**
     * Create new Article
     *
     * @param Request $request
     *
     * @return View
     */
    public function store(Request $request): View
    {
        // validate data and create dto
        $createArticleDto = $request->all();

        return view('articles');
    }
}
