@extends('layout.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h4>Добавляем город</h4>

    <form action="" method="POST">
        @csrf
        <select name="countryId">
            @foreach($countries as $country)
                <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
            @endforeach
        </select> выберите страну<br><br>
        <input type="text" name="cityName" placeholder="новый город"><br><br>
        <input type="submit" name="button">
    </form>
@endsection
