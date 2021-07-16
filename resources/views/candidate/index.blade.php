@extends('layout/main')

@section('title', 'Ini About')

@section('container');  
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Our Candidates List :</h1>

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    <tbody>
                    @foreach($candidate as $cdt)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$cdt -> user_id}} </td>
                            <td>{{$cdt -> nama}}</td>
                            <td>{{$cdt -> jurusan}}</td>
                            <td>{{$cdt -> email}}</td>
                            <td>
                            <a href="" class="badge bg-info">Edit</a>
                            <a href="" class="badge bg-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

 