@extends('layout.main')

@section('title', 'Edit')

@include('partials.navbar')


@section('content')
    <div class="row justify-content-center pb-3">
        @if (session()->has('success_email'))
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
    </div>
@endsection
