@extends('layout.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center mb-0 mt-3">
        <h3 class="text-black-100 mb-0 px-md-5 display-6">Task</h3>
        <a class="btn btn-dark" id="addTask" href="/addtask"><i class="bi bi-plus-circle"> Add Task</i></a>
            
</div>
    </div>
    <div class="row">
        <div class="col-md-3 mx-auto">
            <table class="table table-bordered mt-2">
    <thead class="text-center">
        <tr>
            <th>S.No</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $index => $task)
        <tr class="{{ $task->status == 'Completed' ? 'table-success' : '' }}">
            <td>{{ $index + 1 }}</td>
            <td class="{{ $task->status == 'Completed' ? 'text-decoration-line-through' : '' }}">
                {{ $task->title }}
            </td>
            <td class="text-center">
                <!-- Mark as Completed -->
                <form action="{{ route('tasks.complete', $task->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PATCH')
                    <button type="submit" 
                            class="btn btn-sm btn-success"
                            @if($task->Completed == 1) disabled @endif
                            title="Mark as Completed">
                        <i class="bi bi-check-circle"></i>
                    </button>
                </form>

                <!-- Delete Task -->
                <form action="{{ route('task.destroy', $task->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" title="Delete Task"
                            onclick="return confirm('Are you sure?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-primary mx-1 mt-2" href="{{ route('tasks.completed') }}">Completed Task</a>
    <a class="btn btn-primary mx-1 mt-2" href="{{ route('tasks.pending') }}">Pending Task </a>
        <a class="btn btn-primary mx-1 mt-2"  href="/task">Back</a>

        </div>
    </div>
    <script>
document.getElementById('edit').addEventListener('click', function(){

});
    </script>
@endsection
