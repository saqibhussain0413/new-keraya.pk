@extends('frontend.layouts.app')

@section('content')
        <div class="row" style="background-image: url({{asset('img/1641137785.jpeg')}}); margin-bottom: 0px; ">
            <div class="row" style="background: linear-gradient(45deg, rgba(3, 0, 0, 0.5), rgba(0, 145, 248, 0.5), rgba(3, 0, 0, 0.5) 500%); margin-bottom: 0px;">
                <div class="col s12 m4 offset-m4">
                    <div class="card" style="background: linear-gradient(45deg, rgba(3, 0, 0, 0.8), rgba(0, 145, 248, 0.8), rgba(3, 0, 0, 0.8) 500%); border-radius: 20px;">
                        <h4 class="center indigo-text uppercase p-t-30">
                            <a href="{{ route('home') }}" class="brand-logo" style="font-weight: bold;">
                                <i class="material-icons center">location_city</i>
                                @if(isset($navbarsettings[0]) && $navbarsettings[0]['name'])
                                    {{ $navbarsettings[0]['name'] }}
                                @else
                                    KERAYA.PK
                                @endif
                            </a>
                        </h4>

                        <div class="p-30" >
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row" >
                                    <div class="input-field col s12">
                                        <label>Email Address</label>
                                        <input type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus  style="border-radius: 15px; padding-left: 10px; color:white;">
                                        @if ($errors->has('email'))
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12"   style="background: rgba(1,2,1,0)">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required  style="border-radius: 10px; padding-left: 10px; color:white;">

                                        @if ($errors->has('password'))
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <p>
                                    <label>
                                        <input type="checkbox" name="remember" class="filled-in" {{ old('remember') ? 'checked' : '' }} />
                                        <span style="color: white">{{ __('Remember Me') }}</span>
                                    </label>
                                </p>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <button type="submit" class="btn indigo w100"  style="border-radius: 10px;">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>


                                <a class="indigo-text p-l-15" href="{{ route('password.request') }}"  style="color: #0091f8 !important;">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                            </form>
                            <div class="row">
                                <p style="margin-left: 15px; color: white">Not yet a member? <a href="{{ route('register') }}"  style="color: #0091f8">Register</a> Here!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
