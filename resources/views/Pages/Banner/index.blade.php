@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="con-lg-12 text-center">
            <h1 class="page-title">
               Banner page
            </h1>
        </div>
    </div>
    <div class="col-lg-12">
     <form role="form" action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <input class="form-control form-control-lg" type="text" name="title" placeholder="Enter Your Text" aria-label="default input example">
                </div>

                <div class="col-lg-8 mt-5">
                    <input class="form-control form-control-lg" type="file" name="images"   accept="image/jpg ,image/png , image/jpeg">
                </div>
            </div>

            <div class="col-lg-4">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

     </form>
    </div>
<br><br>
    <div class="row">
        <div class="col-lg-12 " >
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">banner</th>
                        <th scope="col">image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($banners as $key=>$banner)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $banner->title }}</td>
                                <td>
                                    <img src="{{ config('images.access_path') }}/{{ $banner->images->name }}" alt="" width="100px">
                                </td>

                                <td>
                                    @if ($banner->status == 0)
                                        <span class="badge bg-danger">Draft</span>

                                    @else
                                        <span class="badge bg-success ">Publish</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('banner.delete' , $banner->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    @if ($banner->status == 0)
                                        <a href="{{ route('banner.status' , $banner->id) }}" class="btn btn-success">Publish<i class="fa-solid fa-check"></i></a>
                                    @else
                                        <a href="{{ route('banner.status' , $banner->id) }}" class="btn btn-warning">Draft<i class="fa-solid fa-check"></i></a>
                                    @endif

                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
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
