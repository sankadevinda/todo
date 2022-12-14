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
        @foreach ($product as $products)
            <div class="col">
                <div class="card text-white bg-dark  border-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $products->name }}</h5>
                        <p class="card-text">{{ $products->intro }}.</p>
                        <div class="card text-white bg-success border-white mb-3">
                            @foreach ($products->categories as $category)
                            <div class="card-body">
                                <h5 class="card-title">{{ $products->name }}</h5>
                            </div>
                            @endforeach
                        </div>
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





