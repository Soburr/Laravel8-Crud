@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="posts/create" class="btn btn-primary mb-2">Students Information</a> 
                <br>
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
                            <a href="student/{{$student->id}}" class="btn btn-primary">Show</a>
                            <a href="student/{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="student/{{$student->id}}" method="post" class="d-inline">
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