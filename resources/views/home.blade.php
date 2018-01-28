@extends('layouts.app')

@section('content')

@include('layouts.sidebar')

<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/docs/">Home</a></li>
        <li class="breadcrumb-item">Layout </li>
        <li class="breadcrumb-item active">Layout options</li>
    </ol>
    <div class="container-fluid">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
