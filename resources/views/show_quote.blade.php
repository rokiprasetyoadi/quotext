<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail {{$quote->title}}</title>
</head>
<body>
    <a href="{{route('index_quote')}}"><button>Back</button></a>
    <p>{{$quote->title}}</p>
    <p>{{$quote->quote}}</p>
    <p>{{$quote->author}}</p>
    <form action="{{route('edit_quote', $quote)}}" method="get">
        <button type="submit">Edit</button>
    </form>
</body>
</html>