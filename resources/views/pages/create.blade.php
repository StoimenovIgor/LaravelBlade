@extends('layout.main')

@section('title', 'Create new product')

@include('partials.navbar')

@section('content')

@include('partials.buttonsPanel')

<h3 class="mt-3 text-center">Додај нов производ:</h3>

<div class="row justify-content-center pb-3">
    <form class="col-md-6" action="{{ route('store') }}" method="POST">

        @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
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

        @csrf
        <div class="form-group">
            <label for="name">Име</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="subtitle">Поднаслов</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
        </div>
        <div class="form-group">
            <label for="image">Слика</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="http://"
                value="{{ old('image') }}">
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" class="form-control" id="url" name="url" placeholder="http://" value="{{ old('url') }}">
        </div>
        <div class="form-group">
            <label for="description">Опис</label>
            <textarea class="form-control" id="description" name="description"
                rows="3">{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning btn-block">Додај</button>
    </form>
</div>
@endsection