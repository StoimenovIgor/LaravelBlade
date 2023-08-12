@extends('layout.main')

@section('title', 'Admin Panel')

@include('partials.navbar')

@section('content')
@include('partials.buttonsPanel')


    <!-- CARDS -->
    <div class="d-flex justify-content-center align-content-center flex-wrap">
    @foreach($projects as $project)
        <div class="card-relative card-1 marketing flex-grow-0 flex-shrink-0 m-3">
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
                <small class="mb-md-3">Февруари - Март 2022</small>
                <!--new footer-->
                <div class="card-menu">
                    <div class="d-flex justify-content-center">
                        <!-- modal button-->
                        <a href="{{ route('edit', $project) }}" class="btn btn-success mr-3 text-white">
                            <i class="far fa-edit fa-2x"></i></i>
                        </a>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#deleteModal">
                            <i class="fas fa-trash fa-2x"></i>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ $project->url }}" class="btn btn-outline-danger" target="_blank">Дознај повеќе</a>
                </div>
            </div>
        </div>

                    <!-- modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Избриши</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Дали сте сигурни дека сакате да го избришите производот?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Откажи</button>
                            <form action="{{ route('delete', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-warning">Избриши</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection