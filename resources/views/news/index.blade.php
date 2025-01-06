@extends('layouts.main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    @php
    $lang = session()->get('lang') ?? 'uz';
    @endphp

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-10 mb-4 offset-lg-1">

            <!-- News Table -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">{{ __('menu.sidebar.news') }}</h6>
                        <!-- Add News Button -->
                        <a href="/news/create" class="btn btn-primary btn-sm">{{ __('menu.table.add.new') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>{{ __('menu.table.news.title') }}</th>
                                    <th>{{ __('menu.table.news.description') }}</th>
                                    <th>{{ __('menu.table.news.content') }}</th>
                                    <th>{{ __('menu.table.news.category') }}</th>
                                    <th>{{ __('menu.table.news.action') }}</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Image</th>
                                    <th>{{ __('menu.table.news.title') }}</th>
                                    <th>{{ __('menu.table.news.description') }}</th>
                                    <th>{{ __('menu.table.news.content') }}</th>
                                    <th>{{ __('menu.table.news.category') }}</th>
                                    <th>{{ __('menu.table.news.action') }}</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($news as $new)
                                {{-- @dd($new) --}}
                                <tr>
                                    <td>
                                        @if ($new->image_path && file_exists(public_path('storage/' . $new->image_path)))
                                        <img src="{{ asset('storage/' . $new->image_path) }}" alt="News Image"
                                            style="max-width: 100px; max-height: 100px;">
                                        @else
                                        <img src="{{ asset('img/undraw_posting_photo.svg') }}" alt="No Image"
                                            style="max-width: 100px; max-height: 100px;">
                                        @endif
                                    </td>
                                    <td>{{ $new->title[$lang] }}</td>
                                    <td>{{ $new->description[$lang] }}</td>
                                    <td>{{ strip_tags( $new->content[$lang]) }}</td>
                                    <td>{{ $new->category->name[$lang] }}</td>
                                    <td>
                                        <div style="display: flex; gap: 10px;">
                                            <!-- Edit Button -->
                                            <a href="/news/{{ $new->id }}/edit" class="fas fa-edit"></a>
                                            <form action="{{ route('news.destroy', $new->id) }}" method="POST"
                                                style="margin: 0;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="fas fa-trash text-danger"
                                                    style="background: none; border: none; cursor: pointer;"
                                                    title="Delete"></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection