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

            <!-- Categories Table -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">{{ __('menu.category.title') }}</h6>
                        <!-- Add Category Button -->
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createModal">{{ __('menu.table.add.category') }}</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>{{ __('menu.table.category.title') }}</th>
                                    <th>{{ __('menu.table.category.order') }}</th>
                                    <th>{{ __('menu.table.category.action') }}</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>{{ __('menu.table.category.title') }}</th>
                                    <th>{{ __('menu.table.category.order') }}</th>
                                    <th>{{ __('menu.table.category.action') }}</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name[$lang] }}</td>
                                    <td>{{ $category->order}}</td>
                                    <td>
                                        <div style="display: flex; gap: 10px;">
                                            <!-- Edit Button -->
                                            <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                data-target="#editModal{{ $category->id }}">
                                                <i class="fas fa-edit"></i> <!-- Font Awesome Edit Icon -->
                                            </button>

                                            <!-- Delete Form -->
                                            <form action="{{ route('categories.destroy', $category->id) }}"
                                                method="POST" style="margin: 0;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i> <!-- Font Awesome Trash Icon -->
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal{{ $category->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="editModalLabel{{ $category->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $category->id }}">{{ __('menu.table.edit.category') }}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('categories.edit', $category->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="name_uz">{{ __('menu.table.category.title') }} (UZ)</label>
                                                        <input type="text" name="name_uz" class="form-control"
                                                            value="{{ $category->name['uz'] }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name_ru">{{ __('menu.table.category.title') }} (RU)</label>
                                                        <input type="text" name="name_ru" class="form-control"
                                                            value="{{ $category->name['ru'] }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name_en">{{ __('menu.table.category.title') }} (EN)</label>
                                                        <input type="text" name="name_en" class="form-control"
                                                            value="{{ $category->name['en'] }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="order">{{ __('menu.table.category.order') }}</label>
                                                        <input type="number" name="order" class="form-control"
                                                            value="{{ $category->order }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">{{ __('menu.button.cancel') }}</button>
                                                    <button type="submit" class="btn btn-primary">{{ __('menu.button.save-changes') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>

            <!-- Create Modal -->
            <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">{{ __('menu.table.add.category') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name_uz">{{ __('menu.table.category.title') }} (UZ)</label>
                                    <input type="text" name="name_uz" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="name_ru">{{ __('menu.table.category.title') }} (RU)</label>
                                    <input type="text" name="name_ru" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="name_en">{{ __('menu.table.category.title') }} (EN)</label>
                                    <input type="text" name="name_en" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="order">{{ __('menu.table.category.order') }}</label>
                                    <input type="number" name="order" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('menu.button.close') }}</button>
                                <button type="submit" class="btn btn-primary">{{ __('menu.table.add.category') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection