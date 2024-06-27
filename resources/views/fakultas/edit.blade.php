@extends('adminlte::page')

@section('title', 'Fakultas')

@section('content_header')
    <h1>Fakultas</h1>
@stop

@section('content')
    <h1>Edit Fakultas</h1>
    <form action="{{ route('fakultas.update', $fakulta->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nama_fakultas">Nama Fakultas:</label>
            <input type="text" class="form-control @error('nama_fakultas') is-invalid @enderror" id="nama_fakultas" name="nama_fakultas" value="{{ old('nama_fakultas', $fakulta->nama_fakultas) }}" required>
            @error('nama_fakultas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="pimpinan_fakultas">Pimpinan Fakultas:</label>
            <input type="text" class="form-control @error('pimpinan_fakultas') is-invalid @enderror" id="pimpinan_fakultas" name="pimpinan_fakultas" value="{{ old('pimpinan_fakultas', $fakulta->pimpinan_fakultas) }}" required>
            @error('pimpinan_fakultas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop