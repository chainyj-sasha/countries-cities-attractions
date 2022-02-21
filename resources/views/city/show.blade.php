@extends('layout.app')

@section('title')
    {{ $title }}
@endsection

@section('content')

    <h3>Список городов выбранной страны</h3>
    <h4>Выберите любой город:</h4>

    <ul>
        @foreach($cities as $city)
            <li><a href="http://tourism.site/{{ $city['name'] }}/places">{{ ucfirst($city['name']) }}</a></li>
        @endforeach
    </ul>

@endsection
