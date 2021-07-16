@extends('layout/main')

@section('title', 'Ini About')

@section('container');  
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Our Candidates List :</h1>

                <a href="/students/create" class="btn btn-primary my-3">Add Candidates</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                    <ul class="list-group">
                        @foreach($students as $student)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            
                            {{$student->nama}}
                            <a href="/students/{{ $student->id}}" class="badge bg-info">detail</a>
                        </li>
                        @endforeach
                    </ul>
            </div>
        </div>
    </div>
@endsection

 