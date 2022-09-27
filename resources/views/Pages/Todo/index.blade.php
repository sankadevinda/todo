@extends('layout.app')

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
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <input class="mb-3 form-control" type="text" name="search" placeholder="Search Here" >
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
                        @foreach ($tasks as $key=>$task)
                            <tr>
                                {{-- <input type="hidden" class="serdelete_val_id" value="{{ $task->id }}"> --}}
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
                                    <form method="POST" action="{{ route('todo.delete', $task->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                    </form>
                                    {{-- <a href="{{ route('todo.delete' , $task->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a> --}}
                                 {{-- <button type="button" class="btn btn-danger servideletebtn"></button> --}}

                                    <a href="{{ route('todo.done' , $task->id) }}" class="btn btn-success"><i class="fa-solid fa-check"></i></a>
                                    <a href="javascript:void(0);"  class="btn btn-primary"><i class="fa-solid fa-pencil" onclick="taskEditModal({{ $task->id }})"></i></a>
                                    <a href="{{ route('todo.sub' , $task->id) }} "  class="btn btn-success"><i class="fa-solid fa-check"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="taskEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="taskEdit">Todo update</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="taskEditContent">

        </div>

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

@push('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    //edit modal
    function taskEditModal(task_id){
        var data = {
            task_id: task_id,
        };
        $.ajax({
            url:"{{ route('todo.edit')  }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            datatype: '',
            data: data,
            success: function (response){
                //console.log(response);

                $('#taskEditContent').html(response);
                $('#taskEdit').modal('show');
            }
         });
    }


    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

    // $(document).ready(function (){
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

    //     $('.servideletebtn').click(function (e) {
    //         e.preventDefault();

    //         var delete_id = $(this).closest("tr").find('.serdelete_val_id').val();
    //         // alert(delete_id);


    //         swal({
    //             title: "Are you sure?",
    //             text: "Once deleted, you will not be able to recover this imaginary file!",
    //             icon: "warning",
    //             buttons: true,
    //             dangerMode: true,
    //         })
    //         .then((willDelete) => {
    //             if (willDelete) {

    //                 var data={
    //                     "token": $('input[name=_token]').val(),
    //                     "id": delete_id
    //                 };

    //                 $.ajax({
    //                     type: "GET",
    //                     url: "/{task_id}/delete"+delete_id,
    //                     data: "data",
    //                     success: function (response) {
    //                         swal(response.status, {
    //                             icon: "success",
    //                         })
    //                         .then((result) =>{
    //                             location.reload();
    //                         });
    //                     }
    //                 });
    //             }
    //         });
    //     });
    // });


</script>
@endpush
