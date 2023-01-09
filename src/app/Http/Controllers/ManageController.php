<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class ManageController extends Controller
{
    /**
     * Create an article
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request): View {
        // validation

        return view('article-list');
    }

    public function getList(Request $request): View {
        // apply offset & limit

        return view('article-list', DB::table('articles')->get());
    }
}
