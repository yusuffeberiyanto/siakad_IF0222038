@extends('adminlte::page')

@section('title', 'Program Studi')

@section('content_header')
    <h1>Program Studi</h1>
@stop

@section('content')
    <h1>Create Program Studi</h1>
    <form action="{{ route('program-studi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode_prodi">Kode Program Studi:</label>
            <input type="text" class="form-control @error('kode_prodi') is-invalid @enderror" id="kode_prodi" name="kode_prodi" value="{{ old('kode_prodi') }}" required>
            @error('kode_prodi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama_prodi">Nama Program Studi:</label>
            <input type="text" class="form-control @error('nama_prodi') is-invalid @enderror" id="nama_prodi" name="nama_prodi" value="{{ old('nama_prodi') }}" required>
            @error('nama_prodi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kode_fakultas">Fakultas:</label>
            <select class="form-control @error('kode_fakultas') is-invalid @enderror" id="kode_fakultas" name="kode_fakultas" required>
                @foreach($fakultas as $fak)
                    <option value="{{ $fak->id }}" {{ old('kode_fakultas') == $fak->id ? 'selected' : '' }}>
                        {{ $fak->nama_fakultas }}
                    </option>
                @endforeach
            </select>
            @error('kode_fakultas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop