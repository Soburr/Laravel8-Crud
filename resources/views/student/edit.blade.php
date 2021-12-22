@extends('student.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    
                    <form action="/student/{{$student->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Student Name</label>
                            <input type="text" name="studentname" value="{{$student->studentname}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Course</label>
                            <input type="text" name="course" value="{{$student->course}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Fee</label>
                          <input type="text" name="fee" value="{{$student->fee}}" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection