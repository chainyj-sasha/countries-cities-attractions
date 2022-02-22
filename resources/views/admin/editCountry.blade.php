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


<h3>Страница редактирования стран</h3>

<h4>Список всех стран:</h4>
    <ol>
        @foreach($countries as $country)
            <li>{{ ucfirst($country['name']) }}</li>
        @endforeach
    </ol>

<h4>Выберите страну для редактирования:</h4>
<form action="" method="POST">
    @csrf
    <select name="countryId">
        @foreach($countries as $country)
            <option value="{{ $country['id'] }}">{{ ucfirst($country['name']) }}</option>
        @endforeach
    </select><br><br>
    <input type="text" name="newName" placeholder="новое название"><br><br>
    <input type="submit" name="button" value="Редактировать">
</form>


</body>
</html>





