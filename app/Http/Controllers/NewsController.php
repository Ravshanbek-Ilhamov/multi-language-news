<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Http\Resources\NewsResource;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return NewsResource::collection(\App\Models\News::cursorPaginate(10));
    }

    public function store(NewsRequest $request)
    {
        $news = \App\Models\News::create([
            'title' => [
                'uz' => $request->title_uz,
                'en' => $request->title_en,
                'ru' => $request->title_ru,
            ],
            'content' => [
                'uz' => $request->content_uz,
                'en' => $request->content_en,
                'ru' => $request->content_ru,
            ],
            'description' => [
                'uz' => $request->description_uz,
                'en' => $request->description_en,
                'ru' => $request->description_ru,
            ],
            'category_id' => $request->category_id
        ]);
        return new NewsResource($news);
    }

    public function show(\App\Models\News $news)
    {
        return new NewsResource($news);
    }

    public function update(UpdateNewsRequest $request, \App\Models\News $news)
    {
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

        return new NewsResource($news);
    }

    public function destroy(\App\Models\News $news)
    {
        $news->delete();
        return response()->json(null, 204);
    }

    public function filterByCategory(\App\Models\Category $category)
    {
        return NewsResource::collection($category->news()->cursorPaginate(10));
    }
}
