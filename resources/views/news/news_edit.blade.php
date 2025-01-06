@extends('layouts.main')

@section('content')
<div class="container-fluid">
    @php
    $lang = session()->get('lang') ?? 'uz';
    @endphp

    <div class="row">
        <div class="col-lg-10 mb-4 offset-lg-1">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('menu.table.edit.new') }}</h6>
                    <a href="/newses" class="m-0 btn btn-sm btn-primary">{{ __('menu.button.back') }}</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title_uz">{{ __('menu.table.news.title') }} (UZ)</label>
                            <input type="text" name="title_uz" class="form-control" value="{{ $news->title['uz'] }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="title_ru">{{ __('menu.table.news.title') }} (RU)</label>
                            <input type="text" name="title_ru" class="form-control" value="{{ $news->title['ru'] }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="title_en">{{ __('menu.table.news.title') }} (EN)</label>
                            <input type="text" name="title_en" class="form-control" value="{{ $news->title['en'] }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="description_uz">{{ __('menu.table.news.description') }} (UZ)</label>
                            <textarea name="description_uz" class="form-control"
                                required>{{ $news->description['uz'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description_ru">{{ __('menu.table.news.description') }} (RU)</label>
                            <textarea name="description_ru" class="form-control"
                                required>{{ $news->description['ru'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description_en">{{ __('menu.table.news.description') }} (EN)</label>
                            <textarea name="description_en" class="form-control"
                                required>{{ $news->description['en'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="content_uz">{{ __('menu.table.news.content') }} (UZ)</label>
                            <textarea name="content_uz" class="form-control"
                                required>{{ $news->content['uz'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="content_ru">{{ __('menu.table.news.content') }} (RU)</label>
                            <textarea name="content_ru" class="form-control"
                                required>{{ $news->content['ru'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="content_en">{{ __('menu.table.news.content') }} (EN)</label>
                            <textarea name="content_en" class="form-control"
                                required>{{ $news->content['en'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_id">{{ __('menu.table.news.category') }}</label>
                            <select name="category_id" class="form-control" required>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == $news->category_id) selected
                                    @endif>
                                    {{ $category->name[$lang] }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                            @if ($news->image_path && file_exists(public_path('storage/' . $news->image_path)))
                                <img src="{{ asset('storage/' . $news->image_path) }}" class="mt-2 mb-2 img-fluid img-thumbnail" alt="" width="100">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('menu.button.save-changes') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection