@extends('layout.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
<h4>Добавить достопримечательность</h4>

<form action="" method="POST">
    @csrf
    <select name="cityId">
        @foreach($cities as $city)
            <option value="{{ $city['id'] }}">{{ ucfirst($city['name']) }}</option>
        @endforeach
    </select><br><br>
    <input type="text" name="title" placeholder="название"><br><br>
    <textarea name="text" id="" cols="30" rows="10" placeholder="описание"></textarea><br><br>
    <input type="submit" name="button">
</form>
@endsection
