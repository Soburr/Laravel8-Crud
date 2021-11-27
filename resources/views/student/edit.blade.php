@extends('student.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/student/{{$student->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Student Name</label>
                            <input type="text" name="studentname" class="form-control" value="{{$student->studentname}}">
                        </div>

                        <div class="form-group">
                            <label for="">Course</label>
                            <textarea name="course" id="" class="form-control">{{$student->course}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Fee</label>
                            <textarea name="course" id="" class="form-control">{{$student->fee}}</textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection