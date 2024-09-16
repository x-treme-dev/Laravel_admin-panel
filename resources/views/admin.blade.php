<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adimin</title>
</head>
<body>
@foreach($unpublished as $item)
 
<form class="form" action="/admin/{{ $item->id }}" method='post' enctype='multipart/form-data'>
@csrf
<h2>Комментарий № {{ $item->id }}</h2>
<label for="name">Name: 
    <input type="text" name='name' id='name' value='{{$item->name}}'>
</label>
<br><br>
<label for="phone">Phone:
  <input type="tel" id="phone" name="phone" value='{{$item->phone}}'><br>
</label>
<br><br>
<label for="email">Email:
    <input type="email" name='email' id='email' value='{{$item->email}}'>
       
</label>
<br><br>
<div>
<label for="message">Comment:
    <textarea name="message" id='message'>{{$item->message}}</textarea>
        
</label>
</div>
<br>
<!--рейтинг, слева направа добавляем звезды-->
<label for="rating">Rating: 
    <input type="text" name='rating' id='name' value='{{$item->rating}}' style='width:30px;'>
</label>
<p>
<input type="submit"  value="Published" style='width:300px;'>
</p>
</form>
<hr>
@endforeach
</body>
</html>
