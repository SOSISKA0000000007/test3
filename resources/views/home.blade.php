<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     @foreach ($books as $book)
         <a href="/user/{{ $book->id }}">
             <div class="product-card">
                 <h2>{{ $book->name }}</h2>
                 <p>{{ $book->lastname }}</p>
                 <p>{{ $book->surname }}</p>
             </div>
         </a>
     @endforeach
</body>
</html>