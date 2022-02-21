@extends('layout.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <form action="" method="POST">
        @csrf
        <input type="text" name="countryName">
        <input type="submit" name="button">
    </form>
@endsection
