@extends('layout.app')
@section( 'content')
<div class="mt-3 mb-2 d-flex justify-content-center">
   
    <form action="/task" method="POST" class="d-flex flex-column gap-2 mt-3">
        <label for="task">Enter the task</label>
        <input type="text" name="task" placeholder="Enter the task" class="form-control border-dark"><br><br>
        <button class="btn btn-dark" type="submit">Submit</button>
        <a href="/task" class="btn btn-dark" type="reset">Back</a>
@csrf
    </form>
</div>

@endsection