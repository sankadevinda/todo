@extends('Layout.app')

@section('content')



<div
  class="bg-image"
  style="
    background-image: url('https://images.pexels.com/photos/270637/pexels-photo-270637.jpeg?cs=srgb&dl=pexels-pixabay-270637.jpg&fm=jpg');
    height: 100vh;
  "
>

  <!-- Background image -->

  <div class="mask gradient-custom">
    <div class="d-flex justify-content-center align-items-center h-100">
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
    </div>
  </div>
</>



@endsection


@push('css')
<style>
    .page-title{
        padding: 10vh;
        color: #f0d54d;
        font-family: -webkit-body;
        font-size: 5rem;
    }




    .gradient-custom {
      /* fallback for old browsers */
      background: #a18cd1;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(
        45deg,
        rgba(29, 236, 197, 0.6),
        rgba(91, 14, 214, 0.6) 100%
      );

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(
        45deg,
        rgba(29, 236, 197, 0.6),
        rgba(91, 14, 214, 0.6) 100%
      );
    }
</style>
@endpush





