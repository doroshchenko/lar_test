<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\ArticleRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class ManageController extends Controller
{
    public function __construct(private ArticleRepository $articleRepository)
    {
    }
    /**
     * Create an article
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request): View | RedirectResponse
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'name' => ['required', 'max:100'],
                'description' => ['required'],
                'category_id' => ['required'],
            ]);

            $this->articleRepository->create($validatedData);

            return redirect()->route('manage.article.list');
        }

        return view('manage/create', ['categories' => Category::all()]);
    }

    /**
     * 
     * Get Article list
     *
     * @param Request $request
     *
     * @return View
     */
    public function getList(Request $request): View
    {
        return view('manage/list', ["articles" => DB::table('articles')->get()]);
    }
}