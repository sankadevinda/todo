@extends('layout.app')

@section('content')

<div class="container">
    <div class="row pt-3">
        <div class="con-lg-12 text-center">
            <h1 class="page-title">
               Todo Sub Task page
            </h1>
        </div>
        <div class="con-lg-12 text-center">
            <h2 class="page-titles">
               {{-- {{ $sub->title }} --}}
            </h2>
        </div>
    </div>

    <div class="col-lg-12 pt-4">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded ">
            <div class="card-header text-center text-bold bg-warning ">
                <h3>
                    Sub Task Form
                </h3>
            </div>
            <div class="card-body bg-dark">
                <form action="{{ route('todo.store') }}" method="POST" >
                    @csrf
                <div class="row pt-4">
                    <div class="col-lg-6 ">
                        <input class="form-control form-control-lg" type="text" name="sub_title" placeholder="Enter Your subtitle" aria-label="default input example">
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control form-control-lg" type="number" name="phone" placeholder="Enter Your Text" aria-label="default input example">
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-6 ">
                        <div class="from-group">
                            <select class="form-select" name="priority" id="priority" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control form-control-lg" type="date" name="date" placeholder="Enter Your date" aria-label="default input example">
                    </div>
                </div>
                <div class="row text-center pt-5">
                    <div class="col align-self-center pt-4">
                        <textarea name="note" id="note" cols="80" rows="5" placeholder="Enter Your Note"></textarea>
                      </div>

                </div>
                <div class="raw text-center mt-4">
                    <input type="hidden" name="task_id">
                    <button type="submit" class="btn btn-outline-warning">Submit</button>
                </div>
             </form>
            </div>
        </div>

    </div>
 <br><br>
    <div class="row">
        <div class="col-lg-12 " >
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">task</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">


                    </tbody>
                </table>
        </div>
    </div>
</div>



  </div>

@endsection

@push('css')
<style>
    .page-title{
        padding: 5vh;
        color: #686464;
        font-family: -webkit-body;
        font-size: 5rem;
    }

    .page-titles{
        padding: 5vh;
        color: #4381e3c6;
        font-family: -webkit-body;
        font-size: 5rem;
    }
</style>
@endpush


