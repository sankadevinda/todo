@extends('Layout.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="con-lg-12 text-center">
            <h1 class="page-title">
                Relation page
            </h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
  @foreach ($relationship as $item)

    <div class="col">
      <div class="card text-white bg-success mb-3">
        <div class="card-body">
          <h5 class="card-title">{{ $item->name }}</h5>
          <p class="card-text">{{ $item->intro }}.</p>
          <a href="#" class="btn btn-warning">Go somewhere</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>




</div>

@endsection

@push('css')
<style>
    .page-title{
        padding: 10vh;
        color: #786507;
        font-family: -webkit-body;
        font-size: 5rem;
    }

    .card{

        color: #786507;


    }

</style>
@endpush





