<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>

<h2>Страница редактирования городов</h2>

<h3>Список всех городов:</h3>

<ol>
    @foreach($cities as $city)
        <li>{{ ucfirst($city['name']) }}</li>
    @endforeach
</ol>

<h4>Выберите город для редактирования:</h4>
<form action="" method="POST">
    @csrf
    <select name="cityId">
        @foreach($cities as $city)
            <option value="{{ $city['id'] }}">{{ ucfirst($city['name']) }}</option>
        @endforeach
    </select><br><br>
    <input type="text" name="newCityName" placeholder="новое название"><br><br>
    <input type="submit" name="button" value="Редактировать">
</form>

</body>
</html>
