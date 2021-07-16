@extends('layout/main')

@section('title', 'Ini About')

@section('container');  
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Add Candidates :</h1>

                <form method="post" action="/students">
                @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control @error ('nama') is-invalid @enderror" 
                        id="nama" placeholder="Insert candidate's name" name="nama" value="{{old('nama')}}">
                        @error('nama')
                        <div id="nama" class="invalid-feedback">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User ID</label>
                        <input type="text" class="form-control  @error ('user_id') is-invalid @enderror" 
                        id="user_id" placeholder="Insert candidate's ID" name="user_id" value="{{old('user_id')}}">
                        @error('user_id')
                        <div id="user_id" class="invalid-feedback">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" 
                        id="jurusan" placeholder="Insert candidate's Jurusan" name="jurusan" value="{{old('jurusan')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" 
                        id="email" aria-describedby="emailHelp" placeholder="Insert candidate's email" name="email" value="{{old('email')}}">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <!-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

 