

<form action="{{ route('todo.update' , $task->id) }}" method="POST" >
    @csrf
<div class="row">
    <div class="col-lg-8">
        <input class="form-control form-control-lg" type="text" name="title" value="{{ $task->title }}" placeholder="Enter Your Text" aria-label="default input example" required>
    </div>
    <div class="col-lg-4">
        <button type="submit" class="btn btn-success">Update</button>
    </div>
</div>
</form>


