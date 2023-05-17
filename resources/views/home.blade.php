@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">

                                <div class="card card-body bg-primary text-white mb-3">
                                    <a href="{{ url('orders') }}" class="text-white">
                                        <label>My Orders</label>


                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-body bg-success text-white mb-3">
                                    <a href="{{ url('wishlist') }}" class="text-white">
                                        <label>My List</label>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-body bg-warning text-white mb-3">
                                    <a href="{{ url('cart') }}" class="text-white">
                                        <label>My Cart</label>

                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-body bg-danger text-white mb-3">
                                    <a href="{{ url('profile') }}" class="text-white">
                                        <label>My Profile</label>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <hr>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
