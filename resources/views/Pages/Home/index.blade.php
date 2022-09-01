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
