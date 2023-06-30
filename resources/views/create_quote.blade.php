<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quote</title>
</head>
<body>
    <form action="{{route('store_quote')}}" method="post">
        @csrf
        <div>
            <label for="title"></label>
            <input type="text" name="title" id="title" placeholder="title">
        </div><br>
        <div>
            <label for="quote"></label>
            <textarea name="quote" cols="30" rows="10" id="quote" placeholder="quote"></textarea>
        </div><br>
        <div>
            <label for="author"></label>
            <input type="text" name="author" id="quthor" placeholder="author">
        </div><br>
        <div>
            <label for="user"></label>
            <input type="text" name="user_id" id="user">
        </div><br>

        <button type="submit">Submit</button>
    </form>
    
</body>
</html>