@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mt-5" style="padding : 70px;">
                <h1>Looking for a job?</h1>
                <h3>Please create an account</h3>
                <img src="{{asset('image/register-seeker.jpg')}}" width="350" height="300"
                     class="img-responsibe" alt="register-seeker-image">
            </div>

            <div class="col-md-6 mt-5 mb-5">
                <div class="card" id="card" style="margin-top:50px;">
                    <div class="card-header">Register</div>
                    <form action="#" method="post" id="registrationForm">
                        <div class="card-body">
                            <form action="{{ route('store.seeker') }}"  method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="user-name">Full name</label>
                                    <input id="user-name" type="text" name="name" class="form-control">
                                    @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="user-email">Email</label>
                                    <input id="user-email" type="text" name="email" class="form-control">
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="user-password">Password</label>
                                    <input id="user-password" type="password" name="password" class="form-control">
                                    @if($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password')}}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group mb-5 mt-3">
                                    <button class="btn btn-dark" id="btnRegister">Register</button>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
