@extends('layouts.admin.app', ['title' => 'Articles'])

@section('header')
<h1>Articles</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="left">Articles</h4>
                <hr>
                <a href="{{ route('admin.articles.create') }}" class="btn btn-md btn-success mb-3 text-center">ADD
                    ARTICLE</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-data">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    #
                                </th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($articles as $index => $article)
                            <tr>
                                <td class="text-center">
                                    {{ ($articles->currentPage() -1) * $articles->perPage() + $loop->iteration }}</td>
                                <td>{{ $article->title }}</td>
                                <td>
                                    <img src="{{ $article->image  }}" class="rounded" style="width: 120px">
                                </td>
                                <td>{{ $article->description }}</td>
                                <td>{{ $article->user->name }}
                                <td>{{ $article->created_at }}
                                <td>
                                    <form>
                                        <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Articles Belum Tersedia
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
