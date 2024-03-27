@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5 mb-5">
                <div class="card shadow-lg" id="card" style="margin-top : 50px;">
                    <div class="card-header text-center" style="font-size : 1.4rem">Login</div>
                    <form action="{{ route('login.post') }}" method="post" id="loginForm">
                        <div class="card-body">
                            <form action=""  method="post">
                                @csrf
                                <div class="form-group mt-3">
                                    <label class="mb-2" for="user-email">Email</label>
                                    <input id="user-email" type="text" name="email" class="form-control">
                                    @if($errors->has('email'))
                                        <span class="text-danger d-block">{{ $errors->first('email')}}</span>
                                    @endif

                                </div>
                                <div class="form-group mt-3">
                                    <label class="mb-2" for="user-password">Password</label>
                                    <input id="user-password" type="password" name="password" class="form-control">
                                    @if($errors->has('password'))
                                        <span class="text-danger d-block">{{ $errors->first('password')}}</span>
                                    @endif

                                </div>
                                <br>
                                <div class="form-group mb-5 mt-3 text-center">
                                    <button class="btn btn-dark" id="btnRegister">Login</button>
                                    @if($errors->has('incorrect'))
                                        <span class="text-danger d-block">{{ $errors->first('incorrect')}}</span>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
