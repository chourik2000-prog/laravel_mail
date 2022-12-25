@extends('app')

@section('content')

    <!-- Container (Contact Section) -->
    <div class="container">
        <h1 class="col-lg-4" style="margin-top: 100px">Image Téléchargée</h1> <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>
            
            {{-- Permet de raméner l'image à téléchargé ouvert sur le formulaire --}}
            {{-- <img src="{{ asset('images/'.Session::get('image')) }}" /> --}}
        @endif

        <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" class="form-control col-lg-4" name="image" /> <br>

            <button type="submit" class="btn btn-danger col-lg-4" >Téléchargé</button>
        </form>

    </div>
@endsection