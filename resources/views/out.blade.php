<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Out</title>
</head>
<body>
  <h1>Publish:</h1>

@if(session('success'))
<div style='color:orange;'>{{ session('success')}}</div>
@endif

@if(!empty($published))
@foreach($published as $item)
<p>
    <h2>Comment № {{$item->id}}</h2>
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
    Not data
    <a  href="{{ route('form') }}">Write data to form</a>
</p>
@endif
<a  href="{{ route('form') }}">Return to form</a><br>
<a  href="{{ route('admin.index', ['id' => 0]) }}">Return to admin panel</a>
 
</body>
</html>