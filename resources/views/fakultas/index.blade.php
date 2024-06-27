@extends('adminlte::page')

@section('title', 'Fakultas')

@section('content_header')
    <h1>Fakultas</h1>
@stop

@section('content')
    <p>Data Fakultas</p>
    <a href="{{ route('fakultas.create') }}" class="btn btn-primary mb-3">Tambah Fakultas</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Fakultas</th>
                <th scope="col">Pimpinan Fakultas</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fakultas as $fakultas)
                <tr>
                    <td>{{ $fakultas->id }}</td>
                    <td>{{ $fakultas->nama_fakultas }}</td>
                    <td>{{ $fakultas->pimpinan_fakultas }}</td>
                    <td>
                        <a href="{{ route('fakultas.edit', $fakultas->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('fakultas.destroy', $fakultas->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop