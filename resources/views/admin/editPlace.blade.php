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

<h3>Список достопримечательностей:</h3>

<ol>
    @foreach($places as $item)
        <li><a href="http://tourism.site/admin/edit/place/{{ $item['id'] }}">{{ $item['title'] }}</a> | <a href="http://tourism.site/delete/place/{{ $item['id'] }}" style="color: red">удалить</a></li>
    @endforeach
</ol>

@if(!empty($place))
    <h4>Редактирование:</h4>
    <form action="" method="POST">
        @csrf
        <textarea name="newTitle" cols="30" rows="10">{{ $place['title'] }}</textarea> Название<br><br>
        <textarea name="newText" cols="30" rows="10">{{ $place['text'] }}</textarea>Описание<br><br>
        <input type="submit" name="button" value="Редактировать">
    </form>
@endif

<p><a href="http://tourism.site/admin">главная страница администратора</a></p>
<p><a href="http://tourism.site/">на главную страницу сайта</a></p>

</body>
</html>
