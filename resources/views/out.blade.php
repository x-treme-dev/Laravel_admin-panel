<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Out</title>
</head>
<body>
  <h1>Опубликовано:</h1>


@if(!empty($published))
@foreach($published as $item)
<p>
    <h2>Комментарий № {{$item->id}}</h2>
</p>
<p>
    Name: {{$item->name}}
</p>
<p>
    Phone: {{$item->phone}}
</p>
<p>
    Email: {{$item->email}}
</p>
<p>
    Comment: {{$item->message}}
</p>
<p>
    Rating: {{$item->rating}}
</p>
<hr>
@endforeach
@else <p>
    Heт данных
    <a  href="{{ route('form') }}">заполните форму</a>
</p>
@endif
<a  href="{{ route('form') }}">Вернуться к форме</a>
</body>
</html>