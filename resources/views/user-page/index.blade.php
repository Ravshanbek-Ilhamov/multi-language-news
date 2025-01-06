@extends('layouts.main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    @php
        $lang = app()->getLocale();
    @endphp
<!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/user-page">All</a>
                        </li>
                        @foreach (App\Models\Category::limit(6)->get() as $item)
                
                        <li class="nav-item">
                            <a class="nav-link" href="/news/{{ $item->id }}/category">{{ $item->name[app()->getLocale()]
                                }}</a>
                        </li>
                
                        @endforeach
                    </ul>
                
                </nav>
                <!-- End of Topbar -->
    <!-- Content Row -->
    <div class="row">

        @foreach ($news as $item)
            <div class="col-lg-3 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $item->title[$lang] }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            @if ($item->image_path && file_exists(public_path('storage/' . $item->image_path)))
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                    src="{{ asset('storage/' . $item->image_path) }}" alt="...">
                            @else
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                    src="{{asset('img/undraw_posting_photo.svg')}}" alt="...">
                            @endif
                        </div>
                        <p>{{ strip_tags($item->description[$lang]) }}</p>
                        <a href="">{{ __('menu.user-page.show-more') }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{$news->links() }}

</div>
<!-- /.container-fluid -->

@endsection