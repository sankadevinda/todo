@extends('Layout.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="con-lg-12 text-center">
            <h1 class="page-title">
               Todo page
            </h1>
        </div>
    </div>
    <div class="col-lg-12">
     <form action="{{ route('todo.store') }}" method="POST" >
            @csrf
        <div class="row">
            <div class="col-lg-8">
                <input class="form-control form-control-lg" type="text" name="title" placeholder="Enter Your Text" aria-label="default input example">
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
                        <th scope="col">Task</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($tasks as $key=>$task)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $task->title }}</td>

                                <td>
                                    @if ($task->done == 0)
                                        <span class="badge bg-danger">Not Completed</span>

                                    @else
                                        <span class="badge bg-success ">Completed</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('todo.delete' , $task->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    <a href="{{ route('todo.done' , $task->id) }}" class="btn btn-success"><i class="fa-solid fa-check"></i></a>
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
