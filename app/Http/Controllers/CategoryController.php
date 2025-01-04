<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use App\Http\Resources\CategoryRecourse;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::cursorPaginate(2);
        return response()->json(CategoryRecourse::collection($categories), 200);
    }

    public function store(CategoryRequest $request){
        $category = Category::create([
            'name' => [
                'uz' => $request->name_uz,
                'en' => $request->name_en,
                'ru' => $request->name_ru
            ],
            'order' => $request->order
        ]);
        return response()->json(new CategoryRecourse($category), 201);
    }

    public function show(Category $category){
        return response()->json(new CategoryRecourse($category), 200);
    }

    public function update(UpdatecategoryRequest $request, Category $category){
        $category->update([
            'name' => array_merge($category->name, [
                'uz' => $request->name_uz ?? $category->name['uz'],
                'en' => $request->name_en ?? $category->name['en'],
                'ru' => $request->name_ru ?? $category->name['ru'],
            ]),
            'order' => $request->order ?? $category->order,
        ]);
        return response()->json(new CategoryRecourse($category), 200);
    }

    public function destroy(Category $category){
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully'], 204);
    }
}
