@extends('frontend.layouts.app')

@section('content')

    <div class="row formRegister" style="background-image: url({{asset('img/1641137785.jpeg')}}); margin-bottom: 0px;">
        <div class="row" style="background: linear-gradient(45deg, rgba(3, 0, 0, 0.5), rgba(0, 145, 248, 0.5), rgba(3, 0, 0, 0.5) 500%); margin-bottom: 0px;">
            <div class="col s12 m4 offset-m4">
                <div class="card" style="background: linear-gradient(45deg, rgba(3, 0, 0, 0.8), rgba(0, 145, 248, 0.8), rgba(3, 0, 0, 0.8) 500%); border-radius: 20px;">
                <h4 class="center indigo-text uppercase p-t-30" style="font-weight: bold; color: #00A6C7 !important;">{{ __('Register') }}</h4>

                <div class="p-20">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="input-field col s6">
                                <label for="name">{{ __('Full Name') }}</label>
                                <input id="name" type="text" class="{{ $errors->has('fullname') ? 'is-invalid' : '' }}" name="fullname" value="{{ old('fullname') }}" required autofocus>

                                @if ($errors->has('fullname'))
                                    <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <label for="name">{{ __('Father Name') }}</label>
                                <input id="name" type="text" class="{{ $errors->has('fathername') ? 'is-invalid' : '' }}" name="fathername" value="{{ old('fathername') }}" required autofocus>

                                @if ($errors->has('fathername'))
                                    <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <label for="name">{{ __('Address') }}</label>
                                <input id="name" type="text" class="{{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <label for="number">{{ __('Mobile Number') }}</label>
                                <input id="name" type="text" class="{{ $errors->has('number') ? 'is-invalid' : '' }}" name="number" value="{{ old('number') }}" required autofocus>

                                @if ($errors->has('number'))
                                    <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <label for="email">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s6">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required>
                                
                                @if ($errors->has('password'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div class="input-field col s6">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" name="password_confirmation" required>
                            </div>
                        </div>
{{--                        --}}
{{--                        <p>--}}
{{--                            <label>--}}
{{--                                <input type="checkbox" name="agent" class="filled-in" />--}}
{{--                                <span>{{ __('Registration as Agent') }}</span>--}}
{{--                            </label>--}}
{{--                        </p>--}}
{{--                        --}}
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="waves-effect waves-light btn indigo"  style="width: 100%; color: white !important; background-color: #00A6C7 !important;">
                                    {{ __('Register') }}
                                </button>
                                <p style="color: white">Already a member?<a href="{{ route('login') }}"> Back to Login</a>.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
