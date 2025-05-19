@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
    <h1>Galeri Foto</h1>
    <div class="row">
        <div class="col-md-4 mb-3">
            <img src="https://via.placeholder.com/300" class="img-fluid" alt="Gambar 1">
        </div>
        <div class="col-md-4 mb-3">
            <img src="https://via.placeholder.com/300" class="img-fluid" alt="Gambar 2">
        </div>
        <div class="col-md-4 mb-3">
            <img src="https://via.placeholder.com/300" class="img-fluid" alt="Gambar 3">
        </div>
    </div>
@endsection