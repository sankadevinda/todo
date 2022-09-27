@extends('Layout.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="con-lg-12 text-center">
            <h1 class="page-title">
                {{ $category->name}}
            </h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($categoryproductlist as $categoryproductlists)
            <div class="col">
                <div class="card text-white bg-dark  border-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $categoryproductlists->name }}</h5>
                       <h4>{{ $categoryproductlists->intro }}</h4>

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
        color: #904d05c4;
        font-family: -webkit-body;
        font-size: 5rem;
    }

    .card{

        color: #786507;


    }

</style>
@endpush





