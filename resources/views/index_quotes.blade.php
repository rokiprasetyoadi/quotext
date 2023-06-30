@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('INDEX DATA') }}</div>

                <div class="card-body">
                <a href="{{route('create_quote')}}"><button class="btn btn-primary">Add Data</button></a>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Created</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1;
                    @endphp
                    
                        @foreach ($quotes as $data)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$data->title}}</td>
                            <td>{{$data->author}}</td>
                            <td>@php
                                $tgl = date_create($data->created_at);
                                echo date_format($tgl, "d/m/Y - H:i");
                                @endphp</td>
                            <td>
                            <form action="{{route('show_quote', $data)}}" method="get">
                                <button class="btn btn-info" type="submit">Detail</button>
                            </form>
                            <form action="{{route('delete_quote', $data)}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
