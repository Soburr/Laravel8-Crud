
@extends('student.layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="student/create" class="btn btn-primary mb-2">Create New Students Info</a> 
                <br>

                   @if ($message = Session::get('success'))
                     <div class="alert alert-success">
                         <p>{{ $message }}</p>
                     </div>
                   @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Student Names</th>
                            <th>Course</th>
                            <th>Fee</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($student as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->studentname }}</td>
                            <td>{{ $student->course }}</td>
                            <td>{{ $student->fee }}</td>
                            <td>
                            <a href="{{ route('student.show', $student)}}" class="btn btn-primary">Show</a>
                        <a href="{{ route('student.edit', $student)}}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('student.destroy', $student)}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
</div>
@endsection