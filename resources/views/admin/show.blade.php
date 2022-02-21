@extends('layout.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h3>Добавить:</h3>
    <ul>
        <li><a href="http://tourism.site/admin/insert/country">страну</a></li>
        <li><a href="http://tourism.site/admin/insert/city">город</a></li>
        <li><a href="http://tourism.site/admin/insert/place">достопримечательность</a></li>
    </ul>

    <h3>Редактировать:</h3>
    <ul>
        <li><a href="http://tourism.site/admin/???/country">страны</a></li>
        <li><a href="http://tourism.site/admin/???/city">города</a></li>
        <li><a href="http://tourism.site/admin/???/place">достопримечательности</a></li>
    </ul>
@endsection
