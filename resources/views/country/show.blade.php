@extends('layout.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h3>Список стран нашего сайта</h3>
    <h4>Выберите страну пребывания:</h4>

    <ul>
        @foreach($countries as $country)
            <li><a href="http://tourism.site/{{ $country['name'] }}/cities">{{ ucfirst($country['name']) }}</a></li>
        @endforeach
    </ul>
@endsection
