@extends('layout.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h3>Подробное описание:</h3>
    {{ $description['text'] }}
@endsection
