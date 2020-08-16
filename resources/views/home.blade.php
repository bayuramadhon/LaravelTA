@extends('layouts.User')

@section('content')
<div class="container">
   <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Selamat Datang di Procurement PP Urban</div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        @auth
                            You are logged in!
                        @endauth

                        @guest
                            You are not logged in!
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
