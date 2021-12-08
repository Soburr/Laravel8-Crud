@extends('student.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{$student->studentname}}</h2>

                    <br>
                    <div>
                        {{$student->course}}
                    </div>
                    <br>
                    <div>
                        {{$student->fee}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection