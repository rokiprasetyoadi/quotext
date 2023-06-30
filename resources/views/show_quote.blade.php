<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail {{$quote->title}}</title>
</head>
<body>
    
</body>
</html>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DETAIL DATA') }}</div>

                <div class="card-body">
                <a href="{{route('index_quote')}}"><button class="btn btn-primary">Back</button></a>
                <div style="margin-top:50px">
                    <table class="table">
                    <tbody>
                        <tr>
                            <td>Title</td>
                            <td>{{$quote->title}}</td>
                        </tr>
                        <tr>
                            <td>Quote</td>
                            <td>{{$quote->quote}}</td>
                        </tr>
                        <tr>
                            <td>Author</td>
                            <td>{{$quote->author}}</td>
                        </tr>
                    </tbody>
                    </table>
                    <form action="{{route('edit_quote', $quote)}}" method="get">
                        <button class="btn btn-success" type="submit">Edit</button>
                    </form>
                </div>

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
