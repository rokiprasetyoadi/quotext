<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Quotes</title>
</head>
<body>

<a href="{{route('create_quote')}}"><button>Add Data</button></a>
    
@foreach ($quotes as $data)
    <p>title : {{$data->title}}</p>
    <p>author : {{$data->author}}</p>
    <form action="{{route('show_quote', $data)}}" method="get">
        <button type="submit">Detail</button>
    </form>
    <form action="{{route('delete_quote', $data)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit">Delete</button>
    </form>
@endforeach
    
</body>
</html>