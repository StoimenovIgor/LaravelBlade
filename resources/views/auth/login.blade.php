@extends('layout.main')

@section('title', 'Login')

@include('partials.navbar')

@section('content')

    <div class="col-12 mx-auto col-md-6 offset-md-6 mt-5">
        @if($errors->any())
            <div alert class="alert alert-danger border rounded my-2">
                <ul class="my-0 py-1 text-center">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form  method="POST" class="my-md-2" acction="{{ route('authenticate') }}">
            @csrf
                <label for="email">Е-мајл:</label>
                <input type="email" id="email" name="email" class="form-control">

                <label for="password">Лозинка:</label>
                <input type="password" id="password" name="password" class="form-control">
                <button type="submit" class="form-control btn btn-outline-success btn-block mt-2">Логирај се</button>
            </form>
        </div>

@endsection

