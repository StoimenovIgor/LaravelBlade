@extends('layout.main')

@section('title', 'Edit')

@include('partials.navbar')


@section('content')
    <h3 class="mt-3 text-center">Измени го производот:</h3>

    <div class="row justify-content-center pb-3">
        @if (session()->has('success'))
            <div class="alert alert-success text-center">{{ session()->get('success') }}</div>
        @endif
        @if($errors->any())
            <div alert class="alert alert-danger border rounded my-2">
                <ul class="my-0 py-1 text-center">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="col-md-6" action="{{ route('update', $project) }}" method="PUT">
            @csrf
            <div class="form-group">
                <label for="name">Име</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
            </div>
            <div class="form-group">
                <label for="subtitle">Поднаслов</label>
                <input type="text" class="form-control" id="subtitle"
                    name="subtitle" value="{{ $project->subtitle }}">
            </div>
            <div class="form-group">
                <label for="image">Слика</label>
                <input type="text" class="form-control" id="image"
                    name="image" placeholder="http://" value="{{ $project->image }}">

            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control" id="url"
                    name="url" placeholder="http://" value="{{ $project->url }}">
            </div>
            <div class="form-group">
                <label for="description">Опис</label>
                <textarea class="form-control" id="description" name="description"
                    rows="3">{{ $project->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Зачувај</button>
            <a href="{{ route('admin-panel') }}" class="btn btn-warning">Откажи</a>
        </form>
    </div>
@endsection
