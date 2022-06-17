@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('welcome back :) ') }}</div>
                <img src="/images/img1.jpeg" alt="tag">                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
                
                <a href="\dashboard" class="btn btn-warning" role="button">go to the main page</a>

            </div>
        </div>
    </div>
</div>
@endsection
