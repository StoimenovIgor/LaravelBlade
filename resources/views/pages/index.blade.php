@extends('layout.main')

@section('title', 'Brainster academies')

@include('partials.navbar')

@include('partials.banner')

@section('content')
    <!-- CARDS -->
    <div class="d-flex justify-content-center align-content-center flex-wrap">
    @foreach($projects as $project)
        <div class="card-1 marketing flex-grow-0 flex-shrink-0 m-3">
            <figure class="mb-0">
                <div class="card_image">
                    <img src="{{ $project->image }}" class="card-img-top" alt="Product image">
                </div>
                <figcaption class="bg-warning mt-md-3 mx-4">
                    Браинстер академија
                </figcaption>
            </figure>
            <div class="card-body">
                <h5 class=" h6 card-title font-weight-bolder mb-2 text-underscores">{{ $project->name }}</h5>
                <p class="card-text mb-2 font-weight-bold"><u>{{ $project->subtitle }}</u></p>
                <p class="card-text mb-2">{{ $project->description }}</p>
                <small class="mb-md-3">Февруари - Март 2023</small>
                <div class="d-flex justify-content-end">
                    <a href="{{ $project->url }}" class="btn btn-outline-danger" target="_blank">Дознај повеќе</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/4517997e03.js" crossorigin="anonymous"></script>
@endsection