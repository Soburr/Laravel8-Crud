@extends('student.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-success" role="alert">
                        {{ $error }}
                    </div>
                    @endforeach
                @endif
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/student" method="post"> 
                        @csrf
                        <div class="form-group">
                            <label for="">Student Name</label>
                            <input type="text" name="studentname" class="form-control" value="{{ old('studentname')}}">
                        </div>

                        <div class="form-group">
                            <label for="">Course</label>
                            <textarea name="course" id="" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Fee</label>
                            <textarea name="fee" id="" class="form-control"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection