@extends('layouts.main')
@section('container')
    <h1>Home petugas {{ auth()->user()->name }}</h1>
@endsection