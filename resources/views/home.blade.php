@extends('layouts.app')
@section('title','Welcome')

@section('content')
@include('layouts.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 bata">
            <div class="card">
                <div class="card-header word_login ">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection
