<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function index(){
            $news = \App\Models\News::paginate(8);
            return view('user-page.index', ['news' => $news]);
    }

    public function filterByCategory(Category $category){
        $news = $category->news()->paginate(8);
        return view('user-page.index', ['news' => $news]);
    }
}
