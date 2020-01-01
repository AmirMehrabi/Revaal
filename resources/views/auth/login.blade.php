@extends('layouts.app')

@section('content')
<div class="container mx-auto">
        <div class="w-2/5 mx-auto">
            <div class="card  bg-gray-300 p-3">
                <div class="card-header h1 pb-4">
                    <h1 class="text-xl border-b border-gray-600 mb-4">{{ __('ورود به سیستم') }}</h1>
                    <hr>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input bg-white border border-grey-400 rounded p-2 text-xs w-full  form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('کلمه‌ی عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input bg-white border border-grey-400 rounded p-2 text-xs w-full  form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('به یاد سپاری من') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row my-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary button p-2 bg-blue-400 text-white rounded">
                                    {{ __('ورود') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link button is-outlined" href="{{ route('password.request') }}">
                                        {{ __('فراموشی کلمه عبور') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
