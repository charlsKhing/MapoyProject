@extends('dash')
<title>Alumni Dashboard</title>
@section('content')
    <main>
        
        <div class="container-fluid px-4">
            <ol class="breadcrumb mb-4"></ol>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Welcome to Alumni Dashboard') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <p>{{ __('You are logged in as') }} {{ Auth::user()->name }}</p>
                            <p>{{ __('Here you can manage and view all the alumni records') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection