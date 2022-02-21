@extends('layout.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h3>Список достопримечательностей:</h3>

    <h4>Кликните для просмотра</h4>

    <ul>
        @foreach($places as $place)
            <li><a href="http://tourism.site/place/{{ $place['id'] }}">{{ $place['title'] }}</a></li>
        @endforeach
    </ul>
@endsection
