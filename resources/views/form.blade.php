<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>LaraForm</title>
</head>
<body>
<form class="form" action="{{ route('form') }}" method='post' enctype='multipart/form-data'>
@csrf
<label for="name">Name: 
    <input type="text" name='name' id='name' required placeholder="name..."  class="@error('name') is-invalid @else is-valid @enderror">
         @error('name')
         <b>{{ $message }}</b>
         @enderror
</label>
<br><br>
<label for="phone">Phone:
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br>
  <small>Format: 123-45-678</small>
</label>
<br><br>
<label for="email">Email:
    <input type="email" name='email' id='email' required placeholder="youremail@gmail.com"  class="@error('email') is-invalid @else is-valid @enderror">
         @error('email')
         <b>{{ $message }}</b>
         @enderror
</label>
<br><br>
<div>
<label for="message">Message:
    <textarea name="message" id='message' required placeholder="your message..."  class="@error('message') is-invalid @else is-valid @enderror"></textarea>
         @error('message')
         <b>{{ $message }}</b>
         @enderror
</label>
</div>
<!--рейтинг, слева направа добавляем звезды-->
 

 <div class="rating-area">
 
    <input type="radio" id="star-5" name="rating" value="5">
    <label for="star-5" title="Оценка «5»"></label>	
    
    <input type="radio" id="star-4" name="rating" value="4">
    <label for="star-4" title="Оценка «4»"></label>    
    
    <input type="radio" id="star-3" name="rating" value="3">
    <label for="star-3" title="Оценка «3»"></label>  

	<input type="radio" id="star-2" name="rating" value="2">
    <label for="star-2" title="Оценка «2»"></label>    

	<input type="radio" id="star-1" name="rating" value="1">
    <label for="star-1" title="Оценка «1»"></label>
</div>
 
<br><br>
<input type="submit" value="Search" style='width:300px;'>
</form>
</body>
</html>
