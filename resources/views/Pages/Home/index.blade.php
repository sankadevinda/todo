@extends('Layout.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="con-lg-12 text-center">
            <h1 class="page-title">
                Home page
            </h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">

            @forelse ($banners as$banner )
            <div class="col lg-4">
        <div class="card" style="width: 18rem;" >
            <img src="{{ config('images.access_path') }}/{{ $banner->images->name }}" alt="">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        @empty

        @endforelse

    </div>
</div>

@endsection


@push('css')
<style>
    .page-title{
        padding: 10vh;
        color: #686464;
        font-family: -webkit-body;
        font-size: 5rem;
    }
</style>
@endpush
