@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Quotext') }}</div>

                <div class="card-body">
                <div class="quote">
                @if (count($quote) < 1)
                <p>Data Not Found</p>

                @else
                    @foreach ($quote as $data)
                        <p class="quote-title">{{$data->title}}</p>
                        <p class="quote-text">"{{$data->quote}}"</p>
                        <p class="quote-author">- {{$data->author}}</p>
                    @endforeach
                @endif
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
