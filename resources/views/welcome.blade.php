@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Quotext') }}</div>

                <div class="card-body">
                    <form action="{{route('filter')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="numb" class="form-label">Please Input Number</label>
                        <input type="number" class="form-control" name="input_numb" id="numb">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
