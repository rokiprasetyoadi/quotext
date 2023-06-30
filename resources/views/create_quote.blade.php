@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('FORM CREATE DATA') }}</div>

                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{route('store_quote')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="Title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="Title" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <label for="Quote" class="form-label">Quote</label>
                        <textarea class="form-control" name="quote" id="quote" placeholder="Quote Text"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Author" class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" id="Author" placeholder="Author">
                    </div>
                    <div class="mb-3" hidden>
                        <label for="User" class="form-label">User Id</label>
                        <input type="text" class="form-control" name="user_id" id="User" value="{{ Auth::user()->id }}" readonly>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
