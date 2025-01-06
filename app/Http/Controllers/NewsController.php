<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = \App\Models\News::paginate(10);
        $categories = \App\Models\Category::all();
        return view('news.index', ['news' => $news, 'categories' => $categories]);
        // return NewsResource::collection(\App\Models\News::cursorPaginate(10));
    }
    
    public function create()
    {
        $categories = Category::all();
        return view('news.news_create', compact('categories'));
    }

    public function store(NewsRequest $request)
    {

        $data = $request->validated();

        $filePath = null;
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
        }

        News::create([
            'title' => [
                'uz' => $data['title_uz'],
                'ru' => $data['title_ru'],
                'en' => $data['title_en']
            ],
            'description' => [
                'uz' => $data['description_uz'],
                'ru' => $data['description_ru'],
                'en' => $data['description_en']
            ],
            'content' => [
                'uz' => $data['content_uz'],
                'ru' => $data['content_ru'],
                'en' => $data['content_en']
            ],
            'category_id' => $data['category_id'],
            'image_path' => $filePath,
        ]);

        return redirect('/newses');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = Category::all();
        return view('news.news_edit', compact('news', 'categories'));
    }


    public function show(\App\Models\News $news)
    {
        return new NewsResource($news);
    }

    public function update(UpdateNewsRequest $request, \App\Models\News $news)
    {

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
            $news->update([
                'image_path' => $filePath,
            ]);
        }

        $news->update([
            'title' => array_merge($news->title, [
                'uz' => $request->title_uz ?? $news->title['uz'],
                'en' => $request->title_en ?? $news->title['en'],
                'ru' => $request->title_ru ?? $news->title['ru'],
            ]),
            'content' => array_merge($news->content, [
                'uz' => $request->content_uz ?? $news->content['uz'],
                'en' => $request->content_en ?? $news->content['en'],
                'ru' => $request->content_ru ?? $news->content['ru'],
            ]),
            'description' => array_merge($news->description, [
                'uz' => $request->description_uz ?? $news->description['uz'],
                'en' => $request->description_en ?? $news->description['en'],
                'ru' => $request->description_ru ?? $news->description['ru'],
            ]),
            'category_id' => $request->category_id ?? $news->category_id,
        ]);
        return redirect('/newses');
    }

    public function destroy(\App\Models\News $news)
    {
        $news->delete();
        return redirect()->back();
    }

    public function filterByCategory(\App\Models\Category $category)
    {
        return NewsResource::collection($category->news()->cursorPaginate(10));
    }
}
